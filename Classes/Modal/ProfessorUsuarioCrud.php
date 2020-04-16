<?php
require_once 'Conexao.php';
function buscarAlunoNaoAssociado(){
    $pdo=conexao();
    $stmt = $pdo->prepare("SELECT id_usuario,nome_usuario,email_usuario FROM usuario WHERE id_usuario NOT IN (select distinct id_usuario from professor_usuario);");
    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if($users!= NULL){
        return $users;
    }


};
