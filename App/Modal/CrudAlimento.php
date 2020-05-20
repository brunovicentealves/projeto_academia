<?php
require_once 'Conexao.php';


//cadastro de alimentos da dieta
function CadastroAlimento($nome_aliemento,$quantidade,$horario,$id_refeicao){

    try {
        $pdo=conexao();

        $inserir = $pdo->prepare("INSERT INTO alimento(alimento,quantidade,horario_refeicao,id_refeicao) VALUES(:valor1,:valor2,:valor3,:valor4)");

        $inserir->bindValue(":valor1",$nome_aliemento);
        $inserir->bindValue(":valor2",$quantidade);
        $inserir->bindValue(":valor3",$horario);
        $inserir->bindValue(":valor4",$id_refeicao);
        $inserir->execute();

        return true;

    }catch (PDOException $e){

        return $e->getMessage();
    }


}
// busca todos os alimentos
function buscarTodosAlimentos($id_refeicao){
    $pdo=conexao();
    $stmt = $pdo->prepare("SELECT * FROM alimento WHERE id_refeicao=:valor1");
    $stmt->bindValue(":valor1",$id_refeicao);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $total = count($users);

    if($total!= NULL){
        return $users;
    }else{
        return null;
    }
}
