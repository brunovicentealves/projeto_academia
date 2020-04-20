<?php
require_once 'Seguranca.php';
require_once '../Modal/LoginProfessorCrud.php';
$usuario =$_POST['usuario'];
$senha = md5($_POST['senha']);


if(isset($usuario) && isset($senha)){

    $resultado=logarProfessor($usuario,$senha);


    if($usuario == $resultado[0] && $senha == $resultado[1]){

        header("Location:../view/painel.php");
        $_SESSION['usuario']=$resultado[2];

        //controla o acesso o tipo de acesso no menu do sistema
        $_SESSION['acesso']="professor";
        $_SESSION['id_usuario']=$resultado[3];
    }else{
        $_SESSION['mensagem']=$resultado;
        header("Location:../view/LoginProfessor.php");
    }
}







