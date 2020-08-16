<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alunos</title>
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
                        <h2>Alunos <b>Cadastrados</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <form method="post" action="?classe=aluno&acao=filtrar">
                            <div id="filtro">
                                FILTRAR POR MATRICULA
                                <div class="form-group">
                            <input id="inf" type="number" min="1" class="" name="matricula" >
                                <button id="btnf"  type="submit">Filtrar</button>
                            </div>
                            </div>
                        </form>
                        <a href='?classe=aluno&acao=novo' class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Adicionar Aluno</span></a>

                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>

                    <th>Matricula</th>
                    <th>Nome</th>
                    <th>Foto</th>
                    <th>turma</th>
                    <th>Data de matricula</th>
                    <th>Situação</th>
                    <th>CEP</th>
                    <th>Logradouro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Bairro</th>
                    <th>Numero</th>
                    <th>Complemento</th>
                    <th>Codigo do curso</th>
                    <th>Edição/Exclusão</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                        <?php foreach ($aluno as $alunos){ ?>
                    <td><?=$alunos->matricula?></td>
                    <td><?=$alunos->nome?></td>
                    <td><img  style="width: 50px;"  src="./images/<?=$alunos->foto?>"></td>
                    <td><?=$alunos->turma?></td>
                    <td><?=$alunos->dta_matricula?></td>
                    <td><?=$alunos->situacao?></td>
                    <td><?=$alunos->cep?></td>
                    <td><?=$alunos->logradouro?></td>
                    <td><?=$alunos->cidade?></td>
                    <td><?=$alunos->estado?></td>
                    <td><?=$alunos->bairro?></td>
                    <td><?=$alunos->numero?></td>
                    <td><?=$alunos->complemento?></td>
                    <td><?=$alunos->curso_c?></td>

                    <td>
                         <a href='?classe=aluno&acao=alterar&matricula=<?=$alunos->matricula?>' class="edit" > <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        <a href='?classe=aluno&acao=excluir&matricula=<?=$alunos->matricula?>' class="delete"> <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>

<!--HTML DO MODAL-->



</body>
</html>


