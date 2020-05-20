<?php
require_once 'Session.php';
require_once '../Modal/CrudAlimento.php';

//cadastra alimentos da dieta
if(isset($_GET['acao']) && $_GET['acao']=="cadastro"){
    $id_refeicao=$_GET['id'];
$nome_alimento= $_POST['nomeAlimento'];
$quantidade= $_POST['quantidade'];
$horario= $_POST['horario'];

  CadastroAlimento($nome_alimento,$quantidade,$horario,$id_refeicao);

    header("Location:../view/CadastroAlimento.php?id=$id_refeicao");
}

//busca todos os alimentos cadastrados na Dieta
function buscarAlimentos($id_refeicao){
    $resultado=buscarTodosAlimentos($id_refeicao);
    return $resultado;
}
