
<?php



 class Usuarios {
/*
    public $msgErro = "";

    public function getConnection($nome,$host,$usuario,$senha){
    global $pdo;

    $dsn = 'msql:host=localhost;dbname=projeto_login';
    $user = "root";
    $pass="";
    


    
    try {
        $pdo = new PDO($dsn,$user,$pass);
      //  $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        
    } catch (PDOException $ex) {


        $msgErro = $ex->getMessage();
        
        -> =>
    }

  }

  */

     public function cadastrar ($pdo, $email, $telefone,$nome,$senha){
        
       $nsenha = md5($senha);
        
        //verificar se ja esta cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :email");
        $sql ->bindValue (":email",$email);
        $sql ->execute();
        if($sql->rowCount()){
            return false; //JÁ ESTÁ CADASTRADO

        }else{
            
            $sql = $pdo->prepare('INSERT INTO usuarios (email, telefone, usuario, senha) VAlUES (:email, :telefone, :nome, :senha)');
            $sql->bindParam (':email',$email);
            $sql->bindParam (':telefone',$telefone);
            $sql->bindParam (':nome',$nome);
            $sql->bindParam (':senha',$nsenha);
           // $sql->execute(array(':email'=>$email,':telefone'=>$telefone,':usuario'=>$nome,':senha'=>$senha));
            $sql->execute();
            return true;
        }
    }
    public  function logar($pdo, $email, $senha){
        
        //VERIFICAR SE O USUARIO REALMENTE ESTÁ CADASTRADO
        $sql = $pdo ->prepare("SELECT id_usuario FROM usuarios WHERE email = :email AND senha = :senha ");
        $sql->bindValue(":email",$email);
        $sql->bindValue(":senha",md5($senha));
        $sql->execute();
        if($sql->rowCount()> 0){
            $dado = $sql->fetch();
            session_start();
            $_SESSION ['id_usuario']= $dado ['id_usuario'];
            return true;
        }else{
            return false; //NAO FOI POSSIVEL LOGAR
        }
    
    
    }
}
?>