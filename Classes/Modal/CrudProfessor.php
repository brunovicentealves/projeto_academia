<?php

require_once 'Conexao.php';

function findall($pdo){

    $sql = "select * from professor";
    $stmt = $pdo->prepare($sql);

    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($users);
}


function salve ($nome,$sobrenome,$email,$senha,$endereco,$numero,$cep,$complemento,$pais,$cidade,$estado,$cref,$telefone){
    try {
        $pdo=conexao();

        $inserir = $pdo->prepare("INSERT INTO professor (nome_professor,sobrenome_professor,email_professor,senha_professor,endereco,numero,cep,complemento,pais,cidade,estado,cref_professor,telefone) 
VALUES (:valor1,:valor2,:valor3,:valor4,:valor5,:valor6,:valor7,:valor8,:valor9,:valor10,:valor11,:valor12,:valor13)");

        $inserir->bindValue(":valor1",$nome);
        $inserir->bindValue(":valor2",$sobrenome);
        $inserir->bindValue(":valor3",$email);
        $inserir->bindValue(":valor4",$senha);
        $inserir->bindValue(":valor5",$endereco);
        $inserir->bindValue(":valor6",$numero);
        $inserir->bindValue(":valor7",$cep);
        $inserir->bindValue(":valor8",$complemento);
        $inserir->bindValue(":valor9",$pais);
        $inserir->bindValue(":valor10",$cidade);
        $inserir->bindValue(":valor11",$estado);
        $inserir->bindValue(":valor12",$cref);
        $inserir->bindValue(":valor13",$telefone);

        $inserir->execute();

        return " Cadastro Efetuado com sucesso";

    }catch (PDOException $e){

        return $e->getMessage();
    }


}

function excluir($pdo,$id){
    try {

        $deletar = $pdo->prepare("DELETE FROM usuario WHERE id_user= :id");

        $deletar->bindValue(":id", $id);

        $deletar->execute();

        return"Deletado Com sucesso";

    }catch (PDOException $e){

        return $e->getMessage();
    }


}

function atualizar($pdo,$usuario,$senha,$id){

    try {
        $atualizar = $pdo->prepare("UPDATE usuario SET user_name =:usuario , user_password=:senha WHERE id_user =:id");


    $atualizar->bindValue(":usuario", $usuario);

    $atualizar->bindValue(":senha", $senha);

    $atualizar->bindValue(":id", $id);

    $atualizar->execute();

    return "Atualizado com Sucesso";

    }catch (PDOException $e){

        return $e->getMessage();
    }
}
