<?php
require_once '../Controller/Session.php';
require_once '../Controller/ControllerAvaliacao.php';
?>
<!doctype html>
<html lang="br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Ficha</title>
</head>
<body>
<?php include('../view/Menu.php') ?>
<br>
<br>
<br>
<?php
if(isset($_SESSION['mensagem_avaliacao'])) {
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php
        echo $_SESSION['mensagem_avaliacao'];
        unset($_SESSION['mensagem_avaliacao']);

        ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
}
?>
<br>
<br>
<br>
<br>
<div class="text-center">
    <h2>Avaliações</h2>
</div>
<br>
<br>
<div class="container-fluid">
    <div class="text-center">
        <h4>Avaliações</h4>
    </div>
    <div class="row">
        <div class="col-6">
            <a href="CadastraAvaliacao.php"  style="background-color: #FF7F50;" class="btn btn-dark">Cadastrar</a>
        </div>
        <div class="col-6">

        </div>
    </div>
    <br>
    <div class="table">
        <table class="table-striped table-responsive-xl" id="minhaTabela">

            <thead>
            <tr>
                <th style='width: 20%;'>Avaliacao</th>
                <th style='width: 40%;'>Data</th>
                <th style='width: 1%;'>Adcionar</th>
                <th style='width: 1%;'>Excluir</th>
                <th style='width: 1%;'>visualizar</th>
                <th style='width: 1%;'>Editar</th>
            </tr>
            </thead>
            <!-- tras consulta do usuarios não vinculados ao professor-->
            <?php $resultado=buscarAvaliacao();
            if(isset($resultado)){
                foreach ($resultado as $linhas){
                    ?>
                    <tbody>
                    <tr>
                        <td><?=$_SESSION['usuario'],"",$_SESSION['sobrenome_usuario']?></td>
                        <td><?=$linhas['data_avaliacao']?></td>
                        <td><a href="CadastraAvaliacao.php"><img  title="Adcionar Avaliacao" src="../../images/adcionar.png"></a>&nbsp;
                        <td><a href="../Controller/ControllerAvaliacao.php?id=<?=$linhas['id_avaliacao']?>&acao=excluir"><img  title="Excluir Avaliacao" src="../../images/delete.png"></a>&nbsp;
                        <td> <a href="../Controller/ControllerAvaliacao.php?id=<?=$linhas['id_avaliacao']?>&acao=visualizar"><img title="Visualizar Avaliacao"src="../../images/visualizar.png"></a>&nbsp;</td>
                        <td>  <a href="../Controller/ControllerAvaliacao.php?id=<?=$linhas['id_avaliacao']?>&acao=editar"><img title="editar Avaliacao"src="../../images/editar.png"></a></td>
                        </td>

                        <!--<td><a href="../Controller/ControllerProfessorUsuario.php?id=<?//=$linhas['id_usuario']?>" class="btn btn-secondary">Vincular</a></td>-->
                    </tr>
                    </tbody>

                <?php }}?>
        </table>
    </div>
</div>
<!--  Treinos -->
<div class="container-fluid">
    <div class="text-center">
        <h4>Treinos</h4>
    </div>
    <div class="row">
        <div class="col-6">
            <a href="CadastraAvaliacao.php"  style="background-color: #FF7F50;" class="btn btn-dark">Cadastrar</a>
        </div>
        <div class="col-6">

        </div>
    </div>
    <br>
    <div class="table">
        <table class="table-striped table-responsive-xl" id="minhaTabela">

            <thead>
            <tr>
                <th style='width: 20%;'>Avaliacao</th>
                <th style='width: 40%;'>Data</th>
                <th style='width: 1%;'>Adcionar</th>
                <th style='width: 1%;'>Excluir</th>
                <th style='width: 1%;'>visualizar</th>
                <th style='width: 1%;'>Editar</th>
            </tr>
            </thead>
            <!-- tras consulta do usuarios não vinculados ao professor-->
            <?php $resultado=buscarAvaliacao();
            if(isset($resultado)){
                foreach ($resultado as $linhas){
                    ?>
                    <tbody>
                    <tr>
                        <td><?=$_SESSION['usuario'],"",$_SESSION['sobrenome_usuario']?></td>
                        <td><?=$linhas['data_avaliacao']?></td>
                        <td><a href="CadastraAvaliacao.php"><img  title="Adcionar Avaliacao" src="../../images/adcionar.png"></a>&nbsp;
                        <td><a href="../Controller/ControllerAvaliacao.php?id=<?=$linhas['id_avaliacao']?>&acao=excluir"><img  title="Excluir Avaliacao" src="../../images/delete.png"></a>&nbsp;
                        <td> <a href="../Controller/ControllerAvaliacao.php?id=<?=$linhas['id_avaliacao']?>&acao=visualizar"><img title="Visualizar Avaliacao"src="../../images/visualizar.png"></a>&nbsp;</td>
                        <td>  <a href="../Controller/ControllerAvaliacao.php?id=<?=$linhas['id_avaliacao']?>&acao=editar"><img title="editar Avaliacao"src="../../images/editar.png"></a></td>
                        </td>

                        <!--<td><a href="../Controller/ControllerProfessorUsuario.php?id=<?//=$linhas['id_usuario']?>" class="btn btn-secondary">Vincular</a></td>-->
                    </tr>
                    </tbody>

                <?php }}?>
        </table>
    </div>
</div>
<!-- Dietas -->
<div class="container-fluid">
    <div class="text-center">
        <h4>Dietas</h4>
    </div>
    <div class="row">
        <div class="col-6">
            <a href="CadastraAvaliacao.php"  style="background-color: #FF7F50;" class="btn btn-dark">Cadastrar</a>
        </div>
        <div class="col-6">

        </div>
    </div>
    <br>
    <div class="table">
        <table class="table-striped table-responsive-xl" id="minhaTabela">

            <thead>
            <tr>
                <th style='width: 20%;'>Avaliacao</th>
                <th style='width: 40%;'>Data</th>
                <th style='width: 1%;'>Adcionar</th>
                <th style='width: 1%;'>Excluir</th>
                <th style='width: 1%;'>visualizar</th>
                <th style='width: 1%;'>Editar</th>
            </tr>
            </thead>
            <!-- tras consulta do usuarios não vinculados ao professor-->
            <?php $resultado=buscarAvaliacao();
            if(isset($resultado)){
                foreach ($resultado as $linhas){
                    ?>
                    <tbody>
                    <tr>
                        <td><?=$_SESSION['usuario'],"",$_SESSION['sobrenome_usuario']?></td>
                        <td><?=$linhas['data_avaliacao']?></td>
                        <td><a href="CadastraAvaliacao.php"><img  title="Adcionar Avaliacao" src="../../images/adcionar.png"></a>&nbsp;
                        <td><a href="../Controller/ControllerAvaliacao.php?id=<?=$linhas['id_avaliacao']?>&acao=excluir"><img  title="Excluir Avaliacao" src="../../images/delete.png"></a>&nbsp;
                        <td> <a href="../Controller/ControllerAvaliacao.php?id=<?=$linhas['id_avaliacao']?>&acao=visualizar"><img title="Visualizar Avaliacao"src="../../images/visualizar.png"></a>&nbsp;</td>
                        <td>  <a href="../Controller/ControllerAvaliacao.php?id=<?=$linhas['id_avaliacao']?>&acao=editar"><img title="editar Avaliacao"src="../../images/editar.png"></a></td>
                        </td>

                        <!--<td><a href="../Controller/ControllerProfessorUsuario.php?id=<?//=$linhas['id_usuario']?>" class="btn btn-secondary">Vincular</a></td>-->
                    </tr>
                    </tbody>

                <?php }}?>
        </table>
    </div>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

