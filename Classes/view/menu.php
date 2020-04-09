<?php
require_once '../Controller/Seguranca.php';
?>
<nav class="navbar navbar-expand-lg  navbar-dark"  style="background-color: #FF7F50;">
    <a class="navbar-brand" href="../view/painel.php">Vida +</a>
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
            <li class="nav-item active">
                <a class="nav-link" href="../view/ListaUsuarios.php">avaliação</a>
            </li>
        </ul>
        <div class="btn-group dropleft">
            <button type="button" class="btn btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php
                if(isset($_SESSION['usuario'])){
                    echo $_SESSION['usuario'];
                }
                ?>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item"  data-toggle="modal" data-target="#exampleModal">Perfil</a>
                <a class="dropdown-item" href="../Controller/Sair.php">Sair</a>
            </div>
        </div>



    </div>
</nav>

<!--  Janela Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perfil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>