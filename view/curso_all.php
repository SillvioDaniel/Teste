<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cursos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/css/crud.css">
</head>
<body>
<?php include "inc/header.php"?>

<div class="container-fluid">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Cursos <b>Cadastrados</b></h2>
                    </div>
                    <div class="col-sm-6">
                       <a href="?classe=curso&acao=importar"> <button id="btnf" href="?classe=curso&acao=importar"  >Importar XML</button></a>
                        <a href='?classe=curso&acao=novo' class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Adicionar Curso</span></a>

                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>

                    <th>Codigo</th>
                    <th>Nome</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <?php foreach ($curso as $cursos){ ?>
                    <td><?=$cursos->codigo?></td>
                    <td><?=$cursos->nome?></td>

                    <td>
                        <a href='?classe=curso&acao=alterar&codigo=<?=$cursos->codigo?>' class="edit" > <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        <a href='?classe=curso&acao=excluir&codigo=<?=$cursos->codigo?>' class="delete"> <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>





</body>
</html>


