<?php
require_once 'Seguranca.php';
require_once '../Modal/LoginUsuarioCrud.php';
require_once '../Modal/CrudFicha.php';

$usuario =$_POST['usuario'];
$senha = md5($_POST['senha'],row);



if(isset($usuario) && isset($senha)){
        // funcao para buscar dados do usuario
    $resultado=logarUsuario($usuario,$senha);

    //verifica se usuario  existe no sistema
    if($usuario == $resultado[0] && $senha == $resultado[1]){

        $_SESSION['usuario']=$resultado[2];
        //controla o acesso o tipo de acesso no menu do sistema
        $_SESSION['acesso']="usuario";
        $_SESSION['id_usuario']=$resultado[3];

        //pega o id do usuario  e vai verificar se ja tem uma ficha criada
        //se não tiver ele cria
        $idUsuario=$resultado[3];
        $id=buscaFichaAluno($idUsuario);
        if(!isset($id)){
            //cria ficha do usuario no sistema
            criarFichaAluno($idUsuario);
        }

        header("Location:../view/Painel.php");

    }else{
        $_SESSION['mensagem']=$resultado;
        header("Location:../view/LoginUsuario.php");
    }
}








