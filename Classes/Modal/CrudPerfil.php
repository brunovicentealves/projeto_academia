<?php

require_once 'Conexao.php';

function perfilUsuario($id_usuario){
    $pdo=conexao();
    $stmt = $pdo->prepare("SELECT email_usuario,nome_usuario FROM usuario WHERE id_usuario=:id_usuario LIMIT 1");

    $stmt->bindParam(':id_usuario', $id_usuario);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach( $users as $user){

        $email_usuario=$user['email_usuario'];
        $nome_usuario=$user['nome_usuario'];
    }
    if($users!= NULL){
        return array($email_usuario,$nome_usuario);
    }


}

function perfilProfessor($id_professor){
    $pdo=conexao();
    $stmt = $pdo->prepare("SELECT email_Professor,nome_Professor FROM professor WHERE id_professor=:id_professor LIMIT 1");

    $stmt->bindParam(':id_professor', $id_professor);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {

        $email_professor = $user['email_professor'];
        $nome_professor = $user['nome_professor'];
    }
    if ($users != NULL) {
        return array($email_professor, $nome_professor);
    }
}