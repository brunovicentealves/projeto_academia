<?php
require_once 'Session.php';
require_once '../Modal/CrudProfessor.php';

$nome =$_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$complemento = $_POST['complemento'];
$pais = $_POST['pais'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cref = $_POST['cref'];
$telefone = $_POST['telefone'];




$_SESSION['mensagem']=salve($nome,$sobrenome,$email,$senha,$endereco,$numero,$cep,$complemento,$pais,$cidade,$estado,$cref,$telefone);
header("Location:../view/LoginProfessor.php");




