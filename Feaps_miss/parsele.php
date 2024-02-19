<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feaps";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if ($conn->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conn->connect_error);
}

// Verifica se a requisição é do tipo POST (enviado ao enviar o formulário)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o array 'selecionados' está definido na requisição
    if (isset($_POST['selecionados'])) {
        // Limpa a seleção atual de participantes
        $sqlLimparSelecao = "UPDATE party SET selecionado = 0";
        $conn->query($sqlLimparSelecao);

        // Obtém a nova seleção de participantes
        $selecionados = $_POST['selecionados'];

        // Atualiza o banco de dados para marcar os participantes selecionados
        foreach ($selecionados as $nome) {
            $sqlSelecionar = "UPDATE party SET selecionado = 1 WHERE nome = '$nome'";
            $conn->query($sqlSelecionar);
        }

        echo "Seleção de participantes atualizada com sucesso!";
    } else {
        echo "Nenhum participante selecionado.";
    }
}

// Consulta para obter os participantes do banco de dados que foram selecionados
$sqlParticipantes = "SELECT nome, foto FROM party WHERE selecionado = 1";
$result = $conn->query($sqlParticipantes);

// Verifica se há participantes selecionados no banco de dados
if ($result->num_rows > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Seleção de Participantes</title>
    </head>
    <body>
        <form method="post" action="">
            <?php
            // Loop para exibir os participantes selecionados
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col">
                        <div class="card h-100">
                            <img src="' . $row["foto"] . '" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">1°Etapa Traje Jeans</h5>
                                <p class="card-text">' . $row["nome"] . '</p>
                            </div>
                        </div>
                    </div>';
            }
            ?>
            <button type="submit">Atualizar Seleção</button>
        </form>
    </body>
    </html>
    <?php
} else {
    echo "Nenhum participante selecionado encontrado no banco de dados.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
