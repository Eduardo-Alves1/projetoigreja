
<?php
 class Usuarios {

public $msgErro = '';

  public function getConnection(){
    global $pdo;
    $dsn ='mysql:host=localhost;dbname=projeto_login';
    $user='root';
    $pass='';

    try {
        $pdo = new PDO($dsn,$user,$pass);
        return $pdo;

    } catch (PDOException $ex) {
        echo ('ERRO: '.$ex->getMessage());
        //throw $th;
    }

  }
     public function cadastrar ( $email, $telefone,$nome,$senha){
        global $pdo;
       $pdo -> getConnection() ;
        
        //verificar se ja esta cadastrado
        $sql = $pdo ->prepare("SELECT id_usuario FROM usuarios WHERE email = :email");
        $sql ->bindValue (":email",$email);
        $sql ->execute();
        if($sql -> rowCout() > 0){
            return false; //JÁ ESTÁ CADASTRADO
        }else{
            
            $sql -> $pdo->prepare("ISERT INTO usuarios (email, telefone, nome, senha,) VAlUES (:email, :telefone, :nome, :senha)");
            $sql ->bindValue (":email",$email);
            $sql ->bindValue (":telefone",$telefone);
            $sql ->bindValue (":usuario",$nome);
            $sql ->bindValue (":senha",md5($senha));
            $sql->execute();
            return true;
        }
    }
    public  function logar($email, $senha){
          global $pdo;
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