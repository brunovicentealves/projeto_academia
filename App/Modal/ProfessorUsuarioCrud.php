<?php
require_once 'Conexao.php';

//essa função busca os alunos que ainda não foram associados a um professor
function buscarAlunoNaoAssociado(){
    $pdo=conexao();
    $stmt = $pdo->prepare("SELECT id_usuario,nome_usuario,email_usuario FROM usuario WHERE id_usuario NOT IN (select distinct id_usuario from professor_usuario);");
    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if($users!= NULL){
        return $users;
    }


}
// essa funçao  vincula o aluno ao professor para ele poder mexe na ficha do aluno
function vincularAlunoProfessor($id_professor,$id_usuario){
    try {
        $pdo=conexao();

        $inserir = $pdo->prepare("INSERT INTO professor_usuario (id_professor,id_usuario) VALUES (:id_professor,:id_usuario)");

        $inserir->bindValue(":id_professor",$id_professor);
        $inserir->bindValue(":id_usuario",$id_usuario);
        $inserir->execute();

        return "Usuario Cadastrado com Sucesso";

    }catch (PDOException $e){

        return $e->getMessage();
    }
}
