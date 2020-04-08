<?php

require_once 'Conexao.php';

function logarUsuario($pdo,$usuario,$senha){


    $stmt = $pdo->prepare("SELECT email_usuario,senha_usuario,nome_usuario FROM usuario WHERE email_usuario=:usuario AND senha_usuario =:senha LIMIT 1");

    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach( $users as $user){
        $usuario=$user['email_usuario'];
        $senha= $user['senha_usuario'];
        $nomelogin=$user['nome_usuario'];
    }

    if($users!= NULL){
        return array($usuario,$senha,$nomelogin);
    }else{

        return "Usuario ou senha incorretos";
    }

}
