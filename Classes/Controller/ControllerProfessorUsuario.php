<?php

require_once 'Seguranca.php';
require_once '../Modal/ProfessorUsuarioCrud.php';

//vincula o professor ao aluno
if(isset($_GET['id'])){
    $idUsuario=$_GET['id'];
    $idProfessor=$_SESSION['id_usuario'];
    $resultado= vincularAlunoProfessor($idProfessor,$idUsuario);
   $_SESSION['mensagem']=$resultado;
    header("Location:../view/UsuarioProfessor.php");
}

// busca o usuario que não esta vinculado com algum professor
function usuariosNaoVinculado(){
    $resultado=buscarAlunoNaoAssociado();
     return $resultado;
};