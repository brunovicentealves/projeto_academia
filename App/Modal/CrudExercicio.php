<?php

require_once 'Conexao.php';
// cadastro de treino de usuarios
function salvarExercicio($nome_exercicio,$serie,$descricao_exercicio,$id_treino){
    try {
        $pdo=conexao();

        $inserir = $pdo->prepare("INSERT INTO exercicio (nome_exercicio,serie,descricao_exercicio,id_treino) VALUES(:valor1,:valor2,:valor3,:valor4)");

        $inserir->bindValue(":valor1",$nome_exercicio);
        $inserir->bindValue(":valor2",$serie);
        $inserir->bindValue(":valor3",$descricao_exercicio);
        $inserir->bindValue(":valor4",$id_treino);
        $inserir->execute();

        return true;

    }catch (PDOException $e){

        return $e->getMessage();
    }
}
//buscar todos os exercicios do treino
function buscarTodosExercicio($id_treino){
    $pdo=conexao();
    $stmt = $pdo->prepare("SELECT * FROM exercicio WHERE id_treino=:valor1");
    $stmt->bindValue(":valor1",$id_treino);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $total = count($users);

    if($total!= NULL){
        return $users;
    }else{
        return null;
    }
}

function deletarExercicio($id){

    $pdo=conexao();
    $stmt = $pdo->prepare("DELETE FROM exercicio WHERE id_exercicio=:valor1");
    $stmt->bindValue(":valor1",$id);
    $stmt->execute();

    return true;

}