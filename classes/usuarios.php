<?php
 
class Usuario 
{
    
    private $pdo;
	public $msgErro = "";
    public function conectar() 
	{
        $host = "localhost";
        $nome = 'projeto_login';
        $usuario ="root";
        $senha = "";
		global $pdo;
		try{
			$pdo = new PDO("mysql:host=".$host.";dbname=".$nome,$usuario,$senha);
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
		}
	}

      function cadastrar( $email, $telefone,$nome,$senha){
       $pdo = new conectar();
        global $pdo;
        //verificar se ja esta cadastrado
        $sql = $pdo ->prepare("SELECT id_usuario FROM usuarios WHERE email = :email");
        $sql ->bindValue (":email",$email);
        $sql ->execute();
        if($sql -> rowCout() > 0){
            return false; //JÁ ESTÁ CADASTRADO
        }else{
            //TESTAR A FUNÇÃO ABAIXO COM O getConnection
            $sql -> $pdo->prepare("ISERT INTO usuarios (email, telefone, nome, senha,) VAlUES (:email, :telefone, :nome, :senha)");
            $sql ->bindValue (":email",$email);
            $sql ->bindValue (":telefone",$telefone);
            $sql ->bindValue (":usuario",$nome);
            $sql ->bindValue (":senha",md5($senha));
            $sql->execute();
            return true;
        }
    }
      function logar($email, $senha){
          GLOBAL $PDO;
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