<?php
    
  
    include_once 'usuarios.php';
    
    $usuario = new Usuarios;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de novo usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./sytileCadastro.css" />
    
</head>
<body>

    <div id="div-corp-cadastro">
        <img src="./IMAGE/logoIEAB.png" alt="Logo da igreja Evangélica Avivamento Biblíco" width="250px">
        

        <form id="form-cadastro" method = "POST">

             <input type="email" name="email" placeholder="Seu E-mail" maxlength="40">
             <input type="text" name="telefone" placeholder="Telefone" maxlength="30">
             <input type="text"name="nome" placeholder="Usuário" maxlength="40">
             <input type="password" name="senha" placeholder="Senha" maxlength="15">
             <input type="password" name="confsenha" placeholder="Confirmar Senha">
             <input id="input-cadastrar" type="submit" value="CADASTRAR">
             
            
        </form>
    </div>

    <?php
      //verificar se clicou no botão CADASTRAR
       if ( isset($_POST['email'])){
            $email = addslashes ($_POST['email']);
            $telefone = addslashes ($_POST['telefone']);
            $nome = addslashes ($_POST['nome']);
            $senha = addslashes ($_POST['senha']);
            $ConfirmarSenha = addslashes ($_POST['confsenha']);

            //verificar se não esta vazio

            if(!empty($email) && !empty($telefone) && !empty($nome) && !empty ($senha) && !empty($ConfirmarSenha))
            
            {
                $usuario->conectar();
                 if($usuario ->$msgErro== "")// se vazia esta ok
                {
                    if($senha == $ConfirmarSenha)
                    {
                       if ($usuario->cadastrar($email,$telefone,$nome,$senha,$ConfirmarSenha)){
                            echo "Cadastrado com sucesso! Acesse para entrar.";
                       }else{
                           echo "Email já cadastrado !";
                       }
                    }else{
                        echo "Senha e Confirmar Senha não correspondem!";
                    }
                        
                }else{
                    echo "Erro: ".$usuario->$msgErro;

                }
            }else{
                echo "Preencha todos os campos";
            }
        }

    ?>
    
</body>
</html>