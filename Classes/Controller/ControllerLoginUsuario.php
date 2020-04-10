<?php
require_once 'Seguranca.php';
require_once '../Modal/LoginUsuarioCrud.php';

$usuario =$_POST['usuario'];
$senha = $_POST['senha'];



if(isset($usuario) && isset($senha)){

    $resultado=logarUsuario($usuario,$senha);

    if($usuario == $resultado[0] && $senha == $resultado[1]){

        header("Location:../view/painel.php");
        $_SESSION['usuario']=$resultado[2];

        //controla o acesso o tipo de acesso no menu do sistema
        $_SESSION['acesso']="usuario";
        $_SESSION['id_usuario']=$resultado[3];
    }else{
        $_SESSION['mensagem']=$resultado;
        header("Location:../view/Login.php");
    }
}








