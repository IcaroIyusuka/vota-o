<?php
include('conexao.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feaps";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conn->connect_error);
  }

$usuario= $_POST['usuario'];
$senha= $_POST['senha'];


$sql= "INSERT INTO jurados (usuario, senha) 
VALUE ('$usuario', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Jurado cadastrado";
    header("location:gerenciar.php");
  } else {
    echo "Erro ao cadastrar jurado: " . $conn->error;
  }
 
$conn->close();
?>