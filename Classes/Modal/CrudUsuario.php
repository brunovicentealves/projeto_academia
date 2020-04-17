<?php

require_once 'Conexao.php';


// salva usuario no sistema
function salve ($nome,$sobrenome,$email,$senha,$endereco,$numero,$cep,$complemento,$pais,$cidade,$estado,$telefone){
    try {
        $pdo=conexao();

        $inserir = $pdo->prepare("INSERT INTO usuario (nome_usuario,sobrenome_usuario,email_usuario,senha_usuario,endereco,numero,cep,complemento,pais,cidade,estado,telefone) 
VALUES (:valor1,:valor2,:valor3,:valor4,:valor5,:valor6,:valor7,:valor8,:valor9,:valor10,:valor11,:valor12)");

        $inserir->bindValue(":valor1",$nome);
        $inserir->bindValue(":valor2",$sobrenome);
        $inserir->bindValue(":valor3",$email);
        $inserir->bindValue(":valor4",$senha);
        $inserir->bindValue(":valor5",$endereco);
        $inserir->bindValue(":valor6",$numero);
        $inserir->bindValue(":valor7",$cep);
        $inserir->bindValue(":valor8",$complemento);
        $inserir->bindValue(":valor9",$pais);
        $inserir->bindValue(":valor10",$cidade);
        $inserir->bindValue(":valor11",$estado);
        $inserir->bindValue(":valor12",$telefone);

       $inserir->execute();

        return "Usuario Cadastrado com Sucesso";

    }catch (PDOException $e){

        return $e->getMessage();
    }


}

function RecuperaSenha($nome,$email,$senha){

    try {

        $pdo=conexao();

        $atualizar = $pdo->prepare("UPDATE usuario SET senha_usuario =:senha WHERE email_usuario =:email");

       // $atualizar = $pdo->prepare("UPDATE usuario SET senha_usuario =:senha WHERE nome_usuario =:usuario and email_usuario =:email");
       // $atualizar->bindValue(":usuario", $nome);

        $atualizar->bindValue(":email", $email);

        $atualizar->bindValue(":senha", $senha);

        $atualizar->execute();

        return "A nova senha foi enviada para o seu e-mail";

    }catch (PDOException $e){
        return $e->getMessage();
    }

}

function BuscaEmail($nome,$email,$teste){
    try {

        $pdo=conexao();
        $stmt = $pdo->query("SELECT * FROM usuario where nome_usuario = '$nome' and email_usuario = '$email';");

        foreach ($stmt as $row){
            $teste = true;
        }


        if ( $teste == false){
            return "USUÁRIO NÃO CONSTA CADASTRADO NA NOSSA BASE DE DADOS!";
        }else if ( $teste == true){
            return "2";
        }


    } catch (PDOException $e){
        return $e->getMessage();
    }
}

// busca os alunos do professor logado ao sistema
function buscarUsuario($id_professor){
    $pdo=conexao();
    $stmt = $pdo->prepare("SELECT u.id_usuario,u.nome_usuario,u.email_usuario FROM usuario AS u JOIN professor_usuario AS pu ON u.id_usuario = pu.id_usuario WHERE  id_professor=:id_professor;");
    $stmt->bindValue(":id_professor",$id_professor);
    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if($users!= NULL){
        return $users;
    }
}

function excluir($id){
    try {
        $pdo=conexao();

        $deletar = $pdo->prepare("DELETE FROM usuario WHERE id_user= :id");

        $deletar->bindValue(":id", $id);

        $deletar->execute();

        return"Deletado Com sucesso";

    }catch (PDOException $e){

        return $e->getMessage();
    }


}

function atualizar($pdo,$usuario,$senha,$id){

    try {

        $pdo=conexao();

        $atualizar = $pdo->prepare("UPDATE usuario SET user_name =:usuario , user_password=:senha WHERE id_user =:id");


    $atualizar->bindValue(":usuario", $usuario);

    $atualizar->bindValue(":senha", $senha);

    $atualizar->bindValue(":id", $id);

    $atualizar->execute();

    return "Atualizado com Sucesso";

    }catch (PDOException $e){

        return $e->getMessage();
    }
}
