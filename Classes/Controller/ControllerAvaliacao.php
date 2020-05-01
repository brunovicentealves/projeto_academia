<?php
require_once 'Session.php';
require_once 'Seguranca.php';
require_once '../Modal/CrudAvaliacao.php';



if(isset($_POST['historicoClinico']) && isset($_POST['peso'])&& isset($_POST['altura'] )){

    $his_clinico= $_POST['historicoClinico'];
    $peso = doubleval($_POST['peso']);
    $altura = doubleval($_POST['altura']);
    $torax = doubleval($_POST['torax']);
    $cintura = doubleval($_POST['cintura']);
    $abdomen= doubleval($_POST['abdomen']);
    $quadril =doubleval( $_POST['quadril']);
    $antebraco_esquerdo= doubleval($_POST['antebracoEsquerdo']);
    $antebraco_direito= doubleval($_POST['antebracoDireito']);
    $braco_esquerdo=doubleval($_POST['bracoEsquerdo']);
    $braco_direito=doubleval($_POST['bracoDireito']);
    $coxa_esquerda=doubleval($_POST['coxaEsquerda']);
    $coxa_direita=doubleval($_POST['coxaDireita']);
    $panturrilha_esquerda=doubleval($_POST['panturrilhaEsquerda']);
    $panturrilha_direita=doubleval($_POST['pantirrilhaDireita']);
    $id_ficha=intval($_SESSION['id_ficha']);

    $data= date('y/m/d');
    // faz o calculo do imc e retorna para salvar na banco o resultado
    $imc=calculoIMC($peso,$altura);

 $resultado=salvarAvaliacao($his_clinico,$peso,$altura,$imc,$torax,$cintura,$abdomen,$quadril,$panturrilha_esquerda,$antebraco_direito,$braco_esquerdo,$braco_direito,$coxa_esquerda,$coxa_direita,$panturrilha_esquerda,$panturrilha_direita,$data,$id_ficha);

 if($resultado==true){

     $_SESSION['mensagem_avaliacao']="Cadastrado Avaliacao Com Sucesso";
     header("Location:../view/AvaliacaoUsuario.php");
 }
}



function buscarAvaliacao(){
    $id_ficha=$_SESSION['id_ficha'];
   $resultado=buscarAvaliacaoUsusario($id_ficha);
    return $resultado;
}


function calculoIMC($peso,$altura){
    //converte string para double
    $peso= doubleval($peso);
    //converte string para double
    $altura=doubleval($altura);
    //calculo para descobrir imc
    $resultado=$peso/($altura*$altura);
    //formata o  resultado para duas casas decimais
    $resultado= number_format($resultado, 1, ',', ' ');
    // returna o resultado
    return $resultado;
}
