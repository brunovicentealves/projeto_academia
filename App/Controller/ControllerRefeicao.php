<?php
require_once 'Session.php';
require_once '../Modal/CrudRefeicao.php';

//cadastro de refeicao
if(isset($_GET['acao']) && $_GET['acao']=="cadastrar"){
$nome_refeicao=$_POST['nomeRefeicao'];
$descricao_refeicao=$_POST['descricaoRefeicao'];
$data_criacao= date('y/m/d');
$id_ficha=$_SESSION['id_ficha'];
$resultado= cadastraRefeicao($nome_refeicao,$descricao_refeicao,$data_criacao,$id_ficha);

if($resultado==True){

    $resultado=buscarRefeicao($nome_refeicao,$descricao_refeicao,$data_criacao,$id_ficha);
    header("Location:../view/CadastroAlimento.php?id=$resultado");
}
}

// busca todas as refeições
function buscarTodasRefeicao(){
    $id_ficha=$_SESSION['id_ficha'];
    $resultado= buscarIdTodasRefeicoes($id_ficha);
    return $resultado;
}
