<?php
require_once 'Session.php';
require_once '../Modal/CrudTreino.php';
    //cadastra treinos
if(isset($_GET['acao'] )&& $_GET['acao'] == "cadastrar"){
 $nome_treino=$_POST['nomeTreino'];
 $descricao_treino=$_POST['descricaoTreino'];
 $data_criacao= date('y/m/d');
$id_ficha=$_SESSION['id_ficha'];

   $resultado = salvarTreino($nome_treino,$descricao_treino,$data_criacao,$id_ficha);

   if($resultado == true){
       $resultado=buscarIdTreino($nome_treino,$descricao_treino,$id_ficha);

           header("Location:../view/CadastroExercicio.php?id=$resultado");
   }
     //edita os treinos
}elseif (isset($_GET['acao'] )&& $_GET['acao'] == "editar"){
    $id_treino= $_GET['id'];

    header("Location:../view/EditarTreino.php?id=$id_treino");
    //atualiza os dados
}elseif(isset($_GET['acao'] )&& $_GET['acao'] == "atualizar"){
    $id_treino=$_GET['id'];
    $nome_treino=$_POST['nomeTreino'];
    $descricao_treino=$_POST['descricaoTreino'];
    $data_criacao= date('y/m/d');

$resultado= atualizarTreino($id_treino,$nome_treino,$descricao_treino,$data_criacao);
    $_SESSION['mensagem_avaliacao']="Atualizado o dado com sucesso";
    header("Location:../view/FichaAluno.php");
    // visualiza os dados
}elseif (isset($_GET['acao'] )&& $_GET['acao'] == "visualizar"){

    echo "visualizar";

    // deleta os dados
}elseif(isset($_GET['acao'] )&& $_GET['acao'] == "excluir"){

    echo "deletar";
}


//busca todos os treinos
function buscarTodosTreinos(){
$id_ficha=$_SESSION['id_ficha'];
   $resultado= buscarIdTodosTreinos($id_ficha);
    return $resultado;
}
// busca dados pelo id do treino
function buscarIdTreinoAtualizar($id_treino){
    $resultado=buscarTreinoId($id_treino);
    return $resultado;
}

