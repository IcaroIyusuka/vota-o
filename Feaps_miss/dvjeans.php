<?php
session_start();
include("conexao.php");
include("dlogin.php");

$idjure = $_SESSION["ID"];

function verificaVoto($con, $idjure, $id_part) {
    $verificaQuery = "SELECT COUNT(*) FROM voto WHERE id_jure = $idjure AND id_part = $id_part";
    $verificaResult = mysqli_query($con, $verificaQuery);
    $verificaCount = mysqli_fetch_array($verificaResult)[0];
    return $verificaCount > 0;
}

$notas = [
    $_POST["nota"],
    $_POST["not"],
    $_POST["no"],
    $_POST["nt"],
    $_POST["a"],
    $_POST["c"],
    $_POST["d"],
    $_POST["e"],
    $_POST["f"],
    $_POST["g"]
];

foreach ($notas as $key => $nota) {
    $id_part = $key + 1; // Assuming id_part is 1 to 10

    if (verificaVoto($con, $idjure, $id_part)) {
        $updateQuery = "UPDATE voto SET ntjeans = $nota, qnd = NOW() WHERE id_jure = $idjure AND id_part = $id_part";
        $res = mysqli_query($con, $updateQuery);
        $linhas = mysqli_affected_rows($con);

        if ($linhas !== 1) {
            echo "Falha ao atualizar o voto para o participante $id_part";
            mysqli_close($con);
            die();
        }
    } else {
        $insertQuery = "INSERT INTO voto (IDVOTO, ntjeans, id_jure, id_part, qnd) VALUES (NULL, $nota, $idjure, $id_part, NOW())";
        $res = mysqli_query($con, $insertQuery);
        $linhas = mysqli_affected_rows($con);

        if ($linhas !== 1) {
            echo "Falha ao inserir o voto para o participante $id_part";
            mysqli_close($con);
            die();
        }
    }
}

header("location: VotarSocial.php");
mysqli_close($con);
?>
