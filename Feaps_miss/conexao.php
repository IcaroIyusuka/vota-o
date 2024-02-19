<?php
$usuario = "root";
$senha = "";
$database = "feaps";
$host = "localhost";

$con = new mysqli($host, $usuario, $senha, $database);

if($con->error){
    die("falha ao conectar" . $con->error);
}
?>