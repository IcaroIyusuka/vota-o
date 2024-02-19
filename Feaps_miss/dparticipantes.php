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

$nome = $_POST['nome'];

if( isset($_FILES["foto"]) && !empty($_FILES["foto"]))
{
    $foto = "./img/".$_FILES["foto"]["name"];
    move_uploaded_file($_FILES["foto"]["tmp_name"], $foto);
}

// Validação dos dados
$errors = [];

$sql="INSERT INTO party (nome, foto) 
VALUE ('$nome', '$foto')"; 

if ($conn->query($sql) === TRUE) {
    echo "Jogador cadastrado com sucesso!";
    header("location:gerenciar.php");
  } else {
    echo "Erro ao cadastrar jogador: " . $conn->error;
  }
  
  $conn->close();
?>
