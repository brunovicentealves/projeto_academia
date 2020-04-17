<?php
require_once '../Controller/Seguranca.php';
require_once '../Controller/ControllerPerfil.php';

?>
<nav class="navbar navbar-expand-lg  navbar-dark"  style="background-color: #FF7F50;">
    <a class="navbar-brand" href="../view/painel.php">Vida +</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <!-- nivel de acesso do sistema para alunos e professores -->

            <?php
            if($_SESSION['acesso']=="professor"){
                ?>
                <li class="nav-item active">
                    <a class="nav-link" href="../view/UsuarioProfessor.php">Usuários</a>
                </li>
                <?php
            }
            ?>
            <?php
            if($_SESSION['acesso']=="professor"){
                ?>
                <li class="nav-item active">
                    <a class="nav-link" href="../view/MeuAluno.php">Meus Alunos </a>
                </li>
                <?php
            }
            ?>
            <?php
            if($_SESSION['acesso']=="usuario"){
                ?>
                <li class="nav-item active">
                    <a class="nav-link" href="../view/MinhaFichaAluno.php">Minha Ficha</a>
                </li>
                <?php
            }
            ?>

        </ul>
        <div class="btn-group dropleft">
            <button type="button" class="btn btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php
                if(isset($_SESSION['usuario'])){
                    echo $_SESSION['usuario'];
                }
                ?>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item"  data-toggle="modal" data-target="#exampleModal">Perfil</a>
                <a class="dropdown-item" href="../Controller/Sair.php">Sair</a>
            </div>
        </div>
        <br>
        <br>

    </div>
</nav>

<!--  Janela Modal  que mostra os dados do usuario logado no sistema -->
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
                <?php
                $perfil=carregaPerfil($_SESSION['id_usuario'],$_SESSION['acesso']);
                ?>
                <h2><?php echo $perfil[0] ; ?></h2>
                <h2><?php echo $perfil[1] ; ?></h2>
               <?php
                ?>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>