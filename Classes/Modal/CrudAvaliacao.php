<?php

require_once 'Conexao.php';

function salvarAvaliacao($his_clinico,$peso,$altura,$imc,$torax,$cintura,$abdomen,$quadril,$antebraco_esquerdo,$antebraco_direito,$braco_esquerdo,$braco_direito,$coxa_esquerda,$coxa_direita,$panturrilha_esquerda,$panturrilha_direita,$data,$id_ficha){
    try {
        $pdo=conexao();

        $inserir = $pdo->prepare("INSERT INTO avaliacao (his_clinico,peso,altura,imc,torax,cintura,abdomen,quadril,antebraco_esquerdo,antebraco_direito,braco_esquerdo,braco_direito,coxa_esquerdo,coxa_direito,panturrilha_esquerda,panturrilha_direita,data_avaliacao,id_ficha) 
        VALUES(:valor1,:valor2,:valor3,:valor4,:valor5,:valor6,:valor7,:valor8,:valor9,:valor10,:valor11,:valor12,:valor13,:valor14,:valor15,:valor16,:valor17,:valor18)");

        $inserir->bindValue(":valor1",$his_clinico);
        $inserir->bindValue(":valor2",$peso);
        $inserir->bindValue(":valor3",$altura);
        $inserir->bindValue(":valor4",$imc);
        $inserir->bindValue(":valor5",$torax);
        $inserir->bindValue(":valor6",$cintura);
        $inserir->bindValue(":valor7",$abdomen);
       $inserir->bindValue(":valor8",$quadril);
       $inserir->bindValue(":valor9",$antebraco_esquerdo);
        $inserir->bindValue(":valor10",$antebraco_direito);
        $inserir->bindValue(":valor11",$braco_esquerdo);
        $inserir->bindValue(":valor12",$braco_direito);
        $inserir->bindValue(":valor13",$coxa_esquerda);
        $inserir->bindValue(":valor14",$coxa_direita);
        $inserir->bindValue(":valor15",$panturrilha_esquerda);
        $inserir->bindValue(":valor16",$panturrilha_direita);
        $inserir->bindValue(":valor17",$data);
        $inserir->bindValue(":valor18",$id_ficha);
        $inserir->execute();

            return true;

    }catch (PDOException $e){

        return $e->getMessage();
    }
}

function buscarAvaliacaoUsusario($id_ficha){
    $pdo=conexao();
    $stmt = $pdo->prepare("SELECT * FROM avaliacao WHERE id_ficha=:id_ficha");
    $stmt->bindValue(":id_ficha",$id_ficha);
    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if($users!= NULL){
        return $users;
    }
}