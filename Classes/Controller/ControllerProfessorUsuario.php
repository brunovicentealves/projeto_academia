<?php

require_once 'Seguranca.php';
require_once '../Modal/ProfessorUsuarioCrud.php';

if(isset($_GET['id'])){

    $id=$_GET['id'];
    echo $id;
}


function usuariosNaoVinculado(){
    $resultado=buscarAlunoNaoAssociado();
     return $resultado;
};