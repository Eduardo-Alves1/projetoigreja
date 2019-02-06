
<?php
    /**
     * 
     * @return PDO
     */
    function getConnection(){

        $host="localhost";
        $port=33006;
        $user="root";
        $senha="";
        $dbname="projeto_login";
        
        
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=phpmyadmin', $user, $senha);
            return $conn;
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            echo 'Erro' .$e > getMessage();
        
        }

    }
