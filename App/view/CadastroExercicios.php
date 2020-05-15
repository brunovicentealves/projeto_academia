<?php
require_once '../Controller/Session.php';
require_once '../Controller/Seguranca.php';
require_once '../Controller/ControllerPerfil.php';
?>
<!doctype html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicios</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</head>
<body>
<?php include('../view/Menu.php') ?>
<br>
<br>
<br>
<br>
<div align="center">
    <h2> Exercicios </h2>
</div>
<br>
<br>
<br>
<div class="container">
    <form name="form1" action="" method="post">
    <div class="row">
        <div class="form-group col-md-6">
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="inputEmail4">Nome Exercicio: </label>
                    <input name="nomeExercicio" type="text"  required class="form-control" id="nomeExercicio" >
                </div>

                <div class="form-group col-md-4">
                    <label for="inputEmail4">Serie: </label>
                    <input name="serie" type="text"  required class="form-control" id="serie" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Descrição </label>
                    <textarea name="descricaoExercicio" required   class="form-control"  ></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <button type="submit"  style="background-color: #FF7F50;" class="btn btn-dark btn-lg btn-block">Cadastrar</button>
                </div>
                <div class="form-group col-md-4">
                    <a href="../view/FichaAluno.php"  style="background-color: #FF7F50;" class="btn btn-dark btn-lg btn-block">Voltar</a>
                </div>
                <div class="form-group col-md-8">

                </div>
            </div>
         </form>
        </div>
        <div class="form-group col-md-6">
            <div align="center">
                <h5> Exercicios Cadastrados </h5>
            </div>
            <table class="table table-responsive-xl">
                <thead>
                <tr>
                    <th scope="col">Nome  </th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                <tr>

                    <td> posterior</td>
                    <td><a href=""><img  title="Excluir Avaliacao" src="../../images/delete.png"></a></td>

                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?php include('../view/footer.php') ?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>



