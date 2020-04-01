<?php

require_once 'Conexao.php';

function logar($pdo,$usuario,$senha){


    $stmt = $pdo->prepare("SELECT user_name,user_password FROM usuario WHERE user_name=:usuario AND user_password =:senha LIMIT 1");

    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach( $users as $user){
        $usuario=$user['user_name'];
        $senha= $user['user_password'];
    }

    if($users!= NULL){
        return array($usuario,$senha);
    }else{

        return "Usuario ou senha incorretos";
    }

}
