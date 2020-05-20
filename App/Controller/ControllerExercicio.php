<?php
require_once 'Session.php';
require_once '../Modal/CrudExercicio.php';

if( $_GET['acao'] == "cadastro" && isset($_GET['acao'])){
   $id_treino= $_GET['id'];
   $nome_exercicio=$_POST['nomeExercicio'];
   $serie=$_POST['serie'];
   $descricao_exercicio=$_POST['descricaoExercicio'];


    salvarExercicio($nome_exercicio,$serie,$descricao_exercicio,$id_treino);

    header("Location:../view/CadastroExercicio.php?id=$id_treino");
}elseif (isset($_GET['acao']) && $_GET['acao'] == "excluir" ){
    $id=$_GET['id'];
    deletarExercicio($id);
    $id_treino=$_SESSION['id_treino'];
   header("Location:../view/CadastroExercicio.php?id=$id_treino");

}


function buscarExercicio($id_treino){
   $resultado=buscarTodosExercicio($id_treino);
    return $resultado;
}

