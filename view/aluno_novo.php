
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alunos</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./bootstrap/css/crud.css">
</head>
<body>
<div align="center">


<form method="post" action="./?classe=aluno&acao=novo" enctype="multipart/form-data">
    <div class="container">


            <fieldset>


                <legend><center><h2><b>Registrar aluno</b></h2></center></legend><br>



                <div class="form-group">
                    <label class="col-md-4 control-label">Matricula</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input  required name="matricula" placeholder="matricula" class="form-control" min="1" type="number">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-4 control-label" >Nome</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="nome" required placeholder="José da Silva" class="form-control"   type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Curso</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="curso_c" class="form-control selectpicker">
                                <?php foreach ($curso AS $curso){?>
                                    <option value="<?=$curso->codigo?>"><?=$curso->nome?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                </div>



                <div class="form-group">

                    <label class="col-md-4 control-label">Foto</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input  name="arquivo" required type="file"  class="form-control">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-4 control-label" >Turma</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="turma" required placeholder="2" class="form-control" min="1"  type="number">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-4 control-label" >Situação</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="situacao" required placeholder="Ativo" class="form-control"  type="text">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Cep</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="cep" id="cep" required placeholder="11.111-111" class="form-control"  type="text">
                        </div>
                    </div>
                </div>




                <div class="form-group">
                    <label class="col-md-4 control-label">Logradouro</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="logradouro" required id="logradouro" placeholder="Rua da mata" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Cidade</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="cidade" required id="cidade" placeholder="Belo Horizonte" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Estado</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="estado" required id="estado" placeholder="MG" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Bairro</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="bairro" required id="bairro" placeholder="Cidade Nova" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Numero</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="numero" required id="numero" placeholder="35" class="form-control" min="1" type="number">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Complemento</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="complemento" id="complemento" placeholder="Apartamento 101" class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>

                        <a class="btn btn-danger"  href="?classe=aluno&acao=all">Voltar</a>

                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" value="Salvar" class="btn btn-success" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSALVAR &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                    </div>
                </div>


        </form>


    </div>
</div>
</body>
</html>
<script>
     $(document).ready(function(){
        $("#cep").mask("99.999-999")

        $('#cep').change(function(){
            var cep = $("#cep").val().replace(/\D/g,'');
            $.getJSON("https://viacep.com.br/ws/"+cep+"/json/",function(dados){
                if (!("erro" in dados)) {
                    $("#logradouro").val(dados.logradouro);
                    $("#cidade").val(dados.localidade);
                    $("#estado").val(dados.uf);
                    $("#bairro").val(dados.bairro);

                }
            });

        });
    });
</script>