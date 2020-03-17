<?php

 require_once '../Modal/CrudUser.php';



/*$usuario="bruno1695";
$senha="1234";
$mensagem = salve($pdo,$senha ,$usuario);

echo $mensagem;
*/

/*$id=3;
$mesagem=excluir($pdo,$id);


echo $mesagem;

*/

$id = 4;
$usuario =" pedro";
$senha="654321";

$mensagem = atualizar($pdo ,$usuario,$senha,$id);

echo $mensagem ;
?>

