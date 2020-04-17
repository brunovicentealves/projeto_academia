<?php
require_once 'Seguranca.php';
require_once '../Modal/CrudUsuario.php';

// cadastra os usuarios no sitema
if(isset($_POST['nome']) && isset($_POST['email'])){
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
    $telefone = $_POST['telefone'];
    $_SESSION['mensagem']=salve($nome,$sobrenome,$email,$senha,$endereco,$numero,$cep,$complemento,$pais,$cidade,$estado,$telefone);
    header("Location:../view/Login.php");
}

// mostra os alunos vinculados ao professor
function meuAluno(){
    $id_professor=$_SESSION['id_usuario'];
    $resultado =  buscarUsuario($id_professor);
 return $resultado;
}







