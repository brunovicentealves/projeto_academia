<?php

require_once 'Conexao.php';

function perfilUsuario($id_usuario){
    $pdo=conexao();
    $stmt = $pdo->prepare("SELECT * FROM usuario WHERE id_usuario=:id_usuario LIMIT 1");

    $stmt->bindParam(':id_usuario', $id_usuario);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach( $users as $user){

        $nome=$user['nome_usuario'];
        $sobrenome=$user['sobrenome_usuario'];
        $telefone=$user['telefone'];
        $email=$user['email_usuario'];
        $endereco=$user['endereco'];
        $numero=$user['numero'];
        $cep=$user['cep'];
        $complemento=$user['complemento'];
        $pais=$user['pais'];
        $cidade=$user['cidade'];
        $estado=$user['estado'];
    }
    if($users!= NULL){
        return array($nome,$sobrenome,$telefone,$email,$endereco,$numero,$cep,$complemento,$pais,$cidade,$estado);
    }


}

function perfilProfessor($id_professor){
    $pdo=conexao();
    $stmt = $pdo->prepare("SELECT * FROM professor WHERE id_professor=:id_professor LIMIT 1");

    $stmt->bindParam(':id_professor', $id_professor);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {

        $nome=$user['nome_professor'];
        $sobrenome=$user['sobrenome_professor'];
        $telefone=$user['telefone'];
        $email=$user['email_professor'];
        $endereco=$user['endereco'];
        $numero=$user['numero'];
        $cep=$user['cep'];
        $complemento=$user['complemento'];
        $pais=$user['pais'];
        $cidade=$user['cidade'];
        $estado=$user['estado'];
    }
    if ($users != NULL) {
        return array($nome,$sobrenome,$telefone,$email,$endereco,$numero,$cep,$complemento,$pais,$cidade,$estado);
    }
}