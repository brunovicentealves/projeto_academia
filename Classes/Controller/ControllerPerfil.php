<?php
require_once 'Seguranca.php';

require_once '../Modal/CrudPerfil.php';

function carregaPerfil($id,$usuario){

    if($usuario == "usuario"){

        $perfil=perfilUsuario($id);

        return $perfil;

    }elseif($usuario == "professor"){

        $perfil=perfilProfessor($id);
        return $perfil;

    }

}