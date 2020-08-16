
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cursos</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./bootstrap/css/crud.css">
</head>
<body>

<div align="center">


    <form method="post" action=""  >
        <div class="container">


            <fieldset>


                <legend><center><h2><b>Alterar dados do  curso</b></h2></center></legend><br>




                <div class="form-group">
                    <label class="col-md-4 control-label" >Nome</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="nome" value="<?=$curso->getNome()?>" required placeholder="José da Silva" class="form-control" required  type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        <a class="btn btn-danger"  href="?classe=curso&acao=all">Voltar</a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" value="Salvar" class="btn btn-success" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSALVAR &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                    </div>
                </div>
























































