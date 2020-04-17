<?php

require_once 'Conexao.php';

function buscaFichaAluno($id){
    $pdo=conexao();
    $stmt = $pdo->prepare("SELECT id_usuario FROM ficha WHERE id_usuario=:id_usuario LIMIT 1");
    $stmt->bindValue(":id_usuario",$id);
    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach( $users as $user){
        $id=$user['id_usuario'];
    }
    if($users!= NULL){
        return $id;
    }
}


function  criarFichaAluno($idUsuario){

    try {
        $pdo=conexao();

        $inserir = $pdo->prepare("insert into ficha (id_usuario) VALUE (:id_usuario)");

        $inserir->bindValue(":id_usuario",$idUsuario);


        $inserir->execute();

        return "Usuario Cadastrado com Sucesso";

    }catch (PDOException $e){

        return $e->getMessage();
    }


}
