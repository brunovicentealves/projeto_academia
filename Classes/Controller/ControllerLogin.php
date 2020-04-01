<?php

require_once '../Modal/LoginCrud.php';
$usuario =$_POST['usuario'];
$senha = $_POST['senha'];


if(isset($usuario) && isset($senha)){

    $resultado=logar($pdo,$usuario,$senha);

    if($usuario == $resultado[0] && $senha == $resultado[1]){

        header("Location:../view/painel.php");
    }else{

        header("Location:../view/Login.php");
    }
}






