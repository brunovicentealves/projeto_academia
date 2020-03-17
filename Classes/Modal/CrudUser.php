<?php

require_once 'Conexao.php';


function findall($pdo){

    $sql = "select * from usuario";
    $stmt = $pdo->prepare($sql);

    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($users);
}


function salve ($pdo,$senha,$usuario){
    try {

        $inserir = $pdo->prepare("INSERT INTO usuario (user_name,user_password) VALUES (:valor1,:valor2)");

        $inserir->bindValue(":valor1",$usuario);
        $inserir->bindValue(":valor2",$senha);

        $inserir->execute();

        return "senha e usuario salvo";
    }catch (PDOException $e){

        return $e->getMessage();
    }


}

function excluir($pdo,$id){
    try {

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
