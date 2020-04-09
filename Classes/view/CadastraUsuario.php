<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Aluno</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


<form action="../Controller/ControllerCrudUsuario.php" method="post">
    <div align="center">
    <br><br>
    <h2>CADASTRO DE ALUNOS</h2>
        <p>Informações com o (*) são de preenchimentos obrigatórios para o cadastro</p>
    <br>
    </div>

    <div class="container">

     <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nome</label>
                <input name="nome" type="text" placeholder="*" required class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Sobrenome</label>
                <input name="sobrenome" placeholder="*" required type="text" class="form-control" id="inputPassword4">
            </div>
     </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">E-mail</label>
            <input name="email" type="email" placeholder="*" required class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Senha</label>
            <input name="senha" type="password" placeholder="*" required class="form-control" id="inputPassword4">
        </div>
    </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Endereço</label>
                <input name="endereco" type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-1">
                <label for="inputPassword4">Numero</label>
                <input name="numero" type="number" class="form-control" id="inputPassword4">
            </div>
            <div class="form-group col-md-3">
                <label for="inputPassword4">CEP</label>
                <input name="cep" type="number" class="form-control" id="inputPassword4">
            </div>
            <div class="form-group col-md-2">
                <label for="inputPassword4">Complemento</label>
                <input name="complemento" type="text" class="form-control" id="inputPassword4">
            </div>
        </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="inputZip">Pais</label>
            <input name="pais" type="text" class="form-control" id="inputZip">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">Cidade</label>
            <input name="cidade" type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-1">
            <label for="inputZip">Estado</label>
            <input name="estado" type="text" class="form-control" id="inputZip">
        </div>
    </div>
        <div align="center">
            <button type="submit"  style="background-color: #FF7F50;" class="btn btn-dark btn-lg btn-block">Salvar</button>
        </div>
    </div>
</form>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>



