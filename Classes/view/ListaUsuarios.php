<?php
require_once '../Controller/Seguranca.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



    <!-- datatables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>

</head>
<body>
<?php include('../view/menu.php') ?>
<br>
<br>
<div class="container-fluid">
    <div class="ROw">
        <div class="col-12 text-center "><h1>Usuario</h1></div>

    </div>
    <div class="Row">
        <div class="col-12 ">
            <table id="minhaTabela" class="display">
                <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                </tr>
                <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?php include('../view/footer.php') ?>

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
                { "width": "50%", "targets":4 }
            ]
        } );
    });
</script>
</body>
</html>
