<?php

require_once 'Conexao.php';

function logarProfessor($pdo,$usuario,$senha){


    $stmt = $pdo->prepare("SELECT nome_professor,senha_professor,email_professor FROM professor WHERE email_professor=:usuario AND senha_professor=:senha LIMIT 1");

    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach( $users as $user){
        $usuario=$user['email_professor'];
        $senha= $user['senha_professor'];
        $nomelogin = $user['nome_professor'];
    }

    if($users!= NULL){
        return array($usuario,$senha,$nomelogin);
    }else{

        return "Usuario ou senha incorretos";
    }

}