<?php
session_start();

if(!isset($_SESSION['id_usuario'])){
    header("Location: index.php");
    exit;
}

 

?>

SEJA BEM VINDO

<a href="sair.php">SAIR<a>