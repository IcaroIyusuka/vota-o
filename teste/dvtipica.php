<?php
session_start();
include("conexao.php");
include("dlogin.php");


$idjure = $_SESSION["ID"];
?>

<?php
$n1 = $_POST["nota"];

$voto1 = "INSERT INTO voto (IDVOTO, nttipica, id_jure,id_part,qnd)  VALUES (NULL, $n1, $idjure, 1, NOW())";
$res = mysqli_query($con, $voto1);
$linhas = mysqli_affected_rows($con);
?>


<?php
$n2 = $_POST["not"];

$voto2 = "INSERT INTO voto (IDVOTO, nttipica, id_jure,id_part,qnd)  VALUES (NULL, $n2, $idjure, 2,NOW())";
$res = mysqli_query($con, $voto2);
$linhas = mysqli_affected_rows($con);
?>

<?php
$n3 = $_POST["no"];

$voto3 = "INSERT INTO voto (IDVOTO, nttipica, id_jure,id_part,qnd)  VALUES (NULL, $n3, $idjure, 3, NOW())";
$res = mysqli_query($con, $voto3);
$linhas = mysqli_affected_rows($con);

?>

<?php
$n4 = $_POST["nt"];

$voto4 = "INSERT INTO voto (IDVOTO, nttipica, id_jure,id_part,qnd)  VALUES (NULL, $n4, $idjure, 4, NOW())";
$res = mysqli_query($con, $voto4);
$linhas = mysqli_affected_rows($con);

?>

<?php
$n5 = $_POST["a"];

$voto5 = "INSERT INTO voto (IDVOTO, nttipica, id_jure,id_part,qnd)  VALUES (NULL, $n5, $idjure, 5, NOW())";
$res = mysqli_query($con, $voto5);
$linhas = mysqli_affected_rows($con);

?>

<?php
$n1 = $_POST["c"];

$voto1 = "INSERT INTO voto (IDVOTO, nttipica, id_jure,id_part,qnd)  VALUES (NULL, $n1, $idjure, 6, NOW())";
$res = mysqli_query($con, $voto1);
$linhas = mysqli_affected_rows($con);
?>


<?php
$n2 = $_POST["d"];

$voto2= "INSERT INTO voto (IDVOTO, nttipica, id_jure,id_part,qnd)  VALUES (NULL, $n2, $idjure, 7,NOW())";
$res = mysqli_query($con, $voto2);
$linhas = mysqli_affected_rows($con);
?>

<?php
$n3 = $_POST["e"];

$voto3 = "INSERT INTO voto (IDVOTO, nttipica, id_jure,id_part,qnd)  VALUES (NULL, $n3, $idjure, 8, NOW())";
$res = mysqli_query($con, $voto3);
$linhas = mysqli_affected_rows($con);

?>

<?php
$n4 = $_POST["f"];

$voto4 = "INSERT INTO voto (IDVOTO, nttipica, id_jure,id_part,qnd)  VALUES (NULL, $n4, $idjure, 9, NOW())";
$res = mysqli_query($con, $voto4);
$linhas = mysqli_affected_rows($con);

?>

<?php
$n5 = $_POST["g"];

$voto5 = "INSERT INTO voto (IDVOTO, nttipica, id_jure,id_part,qnd)  VALUES (NULL, $n5, $idjure, 10, NOW())";
$res = mysqli_query($con, $voto5);
$linhas = mysqli_affected_rows($con);

?>


<?php

if ($linhas == 1) {
} else {
  echo "falha";
}

header("location:VotarSimpatia.php");
mysqli_close($con);
die();
?>