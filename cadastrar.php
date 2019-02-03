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


    
</body>
</html>