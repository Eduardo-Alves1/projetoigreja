
<?php
    /**
     * 
     * @return PDO
     */
    function getConnection(){

        $host="localst";
        $port=33006;
        
        $user="root";
        $password="";
        $dbname="phpmyadmin";
        
        
        try{
            $conn = new PDO('mysql:host=localhost;dbname=phpmyadmin', $user, $password);
            return $conn;
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            echo 'Erro' .$e > getMessage();
        
        }

    }
