<?php
require_once 'Seguranca.php';
require_once '../Modal/CrudUser.php';
$nome =$_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$complemento = $_POST['complemento'];
$pais = $_POST['pais'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

salve($pdo,$nome,$sobrenome,$email,$senha,$endereco,$numero,$cep,$complemento,$pais,$cidade,$estado);

$_SESSION['mensagem']="CADASTRO EFETUADO COM SUCESSO";
header("Location:../view/Login.php");




