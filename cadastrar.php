<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de novo usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./CSS/estilo.css" />
    <script src="main.js"></script>
</head>
<body>

    <div id="corpo-form">
        <img src="./CSS/IMAGE/logo-preto.png.png" alt="Logo da igreja Evangélica Avivamento Biblíco" width="250px">
        
        <h3>Cadastrar Novo Usuário</h3>

        <form method = "POST" action="processa.php">

             <input type="text" placeholder="Nome completo">
             <input type="text" placeholder="Telefone">
             <input type="email" placeholder="Usuário">
             <input type="password" placeholder="Senha">
             <input type="password" placeholder="Confirmar Senha">
             <input type="submit" value="CADASTRAR">
             
            
        </form>
    </div>


    
</body>
</html>