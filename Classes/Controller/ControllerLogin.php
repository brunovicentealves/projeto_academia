<?php
require_once 'Seguranca.php';
require_once '../Modal/LoginUsuarioCrud.php';
$usuario =$_POST['usuario'];
$senha = $_POST['senha'];



if(isset($usuario) && isset($senha)){

    $resultado=logarUsuario($pdo,$usuario,$senha);

    if($usuario == $resultado[0] && $senha == $resultado[1]){

        header("Location:../view/painel.php");
        $_SESSION['usuario']=$resultado[2];
    }else{
        $_SESSION['mensagem']=$resultado;
        header("Location:../view/Login.php");
    }
}






