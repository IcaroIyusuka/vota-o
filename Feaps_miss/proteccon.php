<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['IDcon'])){
    die("voce nao pode acessar por esse meio");
}

?>