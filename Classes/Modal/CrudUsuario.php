<?php

require_once 'Conexao.php';



function salve ($nome,$sobrenome,$email,$senha,$endereco,$numero,$cep,$complemento,$pais,$cidade,$estado,$telefone){
    try {
        $pdo=conexao();

        $inserir = $pdo->prepare("INSERT INTO usuario (nome_usuario,sobrenome_usuario,email_usuario,senha_usuario,endereco,numero,cep,complemento,pais,cidade,estado,telefone) 
VALUES (:valor1,:valor2,:valor3,MD5($senha),:valor5,:valor6,:valor7,:valor8,:valor9,:valor10,:valor11,:valor12)");

        $inserir->bindValue(":valor1",$nome);
        $inserir->bindValue(":valor2",$sobrenome);
        $inserir->bindValue(":valor3",$email);
      //$inserir->bindValue(":valor4",$senha);
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
