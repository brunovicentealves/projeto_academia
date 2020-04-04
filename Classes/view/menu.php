<?php
require_once '../Controller/Seguranca.php';
?>
<nav class="navbar navbar-expand-lg  navbar-dark"  style="background-color: #FF7F50;">
    <a class="navbar-brand" href="#">Vida +</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../view/ListaTreinos.php">Treinos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Dietas</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../view/ListaUsuarios.php">Usuarios</a>
            </li>
        </ul>
        <div class="btn-group dropleft">
            <button type="button" class="btn btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php
                if(isset($_SESSION['usuario'])){
                    echo $_SESSION['usuario'];
                    unset($_SESSION['usuario']);
                }
                ?>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Perfil</a>
                <a class="dropdown-item" href="../Controller/Sair.php">Sair</a>
            </div>
        </div>



    </div>
</nav>