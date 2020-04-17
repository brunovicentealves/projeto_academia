<?php
require_once 'Seguranca.php';
require_once '../Modal/CrudUsuario.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = substr(md5(time()), 0, 6);
$teste = false;


BuscaEmail($nome,$email,$teste);
$teste1 = BuscaEmail($nome,$email,$teste);
 if ($teste1 == 2){

     $_SESSION['mensagem']=RecuperaSenha($nome,$email,$senha);
     header("Location:../view/Login.php");
 }else if ($teste1 == "USUÁRIO NÃO CONSTA CADASTRADO NA NOSSA BASE DE DADOS!"){
     $_SESSION['mensagem']=BuscaEmail($nome,$email,$teste);
     header("Location:../view/Login.php");
 }

