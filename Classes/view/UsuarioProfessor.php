<?php
require_once '../Controller/Seguranca.php';
require_once '../Controller/ControllerProfessorUsuario.php';
?>
<!doctype html>
<html lang="br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<?php include('../view/menu.php') ?>
<br>
<br>
<div class="container-fluid">
    <div class="table">
    <table class="table-striped table-responsive-xl" id="minhaTabela">

        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nome usuario</th>
            <th scope="col">Email usuario</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <?php $resultado=usuariosNaoVinculado();
        foreach ($resultado as $linhas){
            ?>
        <tbody>
        <tr>
            <td><?=$linhas['id_usuario']?></td>
            <td><?=$linhas['nome_usuario']?></td>
            <td><?=$linhas['email_usuario']?></td>
            <td><a href="../Controller/ControllerProfessorUsuario.php?id=<?=$linhas['id_usuario']?>" class="btn btn-secondary">Vincular</a></td>
        </tr>
        </tbody>
        <?php }?>
    </table>
</div>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );$(document).ready(function(){
        $('#minhaTabela').DataTable({
            "language": {
                "info":"Mostrando _START_ a _END_ de _TOTAL_ registros",
                "infoEmpty":"Mostrando 0 a 0 de 0 Registros",
                "search":"Procurar:",
                "lengthMenu":     "Mostrando _MENU_ Registros",
                "zeroRecords":"Não foi encontrado nenhum registro",
                "paginate": {
                    "first":      "First",
                    "last":       "Last",
                    "next":       "Proximo",
                    "previous":   "Anterior"
                },
            }
        });

        $('#minhaTabela').DataTable( {
            "ajax": baseURL,
            "deferRender": true,
            "order": [[ 0, "asc" ]],
            "pageLength": 300,
            "columnDefs": [
                { "width": "50%", "targets":6 }
            ]
        } );
    });
</script>
</body>
</html>