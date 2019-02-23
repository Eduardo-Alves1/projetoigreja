<?php

include 'database.class.php';
use Banco\Database;

$pdo = Database::conexao();

    session_start();
    require_once 'usuarios.php';
    $u = new  Usuarios;
   // $msgErro = "";
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./style.css">
  
</head>
<body>
  
    <div id="form-div">
      <strong><samp id="span-top">Igreja Evangélica Avivamento Biblíco</samp></strong>
      
      <form id="form-pai" action="POST">
       
        <hr>

       <img src="./IMAGE/logoIEAB.png" alt="Logo da igrja evangélica  avivamento biblíco">
        
        <input type="email" name="email" placeholder="Seu nome de usuário">
        <input type="password" name="senha" placeholder="Sua senha de cesso">
        <input id="input-acess" type="submit" value="Entrar">
        <p>Cadastrar novo adiministrador.<strong><a href="cadastrar.php"> Clik aqui!</a></strong>  </p> 
        
      </form>
      </div>
  

    
</body>
</html>