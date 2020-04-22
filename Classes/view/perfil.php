<?php
require_once '../Controller/Seguranca.php';
require_once '../Controller/ControllerPerfil.php';
?>
<!doctype html>
<html lang="br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Usuário</title>
</head>
<body>
<?php include('../view/menu.php') ?>
<br>
<br>
<div class="container">
    <div class="form-row">
        <div class="form-group col-md-1">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" style="background-color: #FF7F50;" class="btn btn-secondary"  data-toggle="modal" data-target="#exampleModal">Alterar Senha</button>
                <button type="button" style="background-color: #FF7F50;"class="btn btn-secondary">Atualizar Cadastros</button>
            </div>
        </div>
    <?php
            $resultado=carregaPerfil($_SESSION['id_usuario'],$_SESSION['acesso']);

    ?>

    </div>
<div class="form-row">
    <div class="form-group col-md-12 text-center">
        <b>Informações Pessoais</b>
    </div>
</div>
    <br>
    <br>
    <div class="form-row">
        <div class="form-group col-md-4">
           <b>Nome : </b><?=$resultado[0]?><?=$resultado[1]?>
        </div>
        <div class="form-group col-md-4">
            <b>Telefone : </b><?=$resultado[2]?>
        </div>
        <div class="form-group col-md-4">
            <b> Email: </b><?=$resultado[3]?>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
           <b> Endereço : </b><?=$resultado[4]?>
        </div>
        <div class="form-group col-md-2">
           <b>Numero : </b><?=$resultado[5]?>
        </div>
        <div class="form-group col-md-2">
           <b>Cep: </b><?=$resultado[6]?>
        </div>
        <div class="form-group col-md-2">
            <b>Complemento : </b><?=$resultado[7]?>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
          <b>Pais : </b><?=$resultado[8]?>
        </div>
        <div class="form-group col-md-4">
           <b>Cidade: </b><?=$resultado[9]?>
        </div>
        <div class="form-group col-md-4">
            <b>Estado : </b><?=$resultado[10]?>
        </div>
    </div>


</div>

<?php include('../view/footer.php') ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Alterar Senha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col">
                            <input type="password" class="form-control" placeholder=" Nova Senha">
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Confirmar Nova senha ">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

                <button type="button" style="background-color: #FF7F50;"  class="btn btn-primary">Alterar</button>
            </div>
        </div>
    </div>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>