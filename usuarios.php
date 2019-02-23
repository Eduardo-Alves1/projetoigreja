
<?php



 class Usuarios {

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
        $nsenha = md5($senha);
        //VERIFICAR SE O USUARIO REALMENTE ESTÁ CADASTRADO
        $sql = $pdo ->prepare("SELECT id_usuario FROM usuarios WHERE email = :email AND senha = :senha ");
        $sql->bindValue(":email",$email);
        $sql->bindValue(":senha",$nsenha);
        $sql->execute();
        if($sql->rowCount()>0){
            $dado = $sql->fetch();
            session_start();
            $_SESSION ['id_usuario']= $dado ['id_usuario'];
            return true; //LOGADO COM SUCESSO
        }else{
            return false; //NAO FOI POSSIVEL LOGAR
        }
    
    
    }
}
?>