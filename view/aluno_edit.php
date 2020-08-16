
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


    <form method="post" action="" enctype="multipart/form-data" >
        <div class="container">


            <fieldset>


                <legend><center><h2><b>Alterar dados do  aluno</b></h2></center></legend><br>



                <div class="form-group">
                    <label class="col-md-4 control-label">Matricula</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input  required disabled name="matricula" value="<?=$aluno->getMatricula()?>" placeholder="matricula" class="form-control" min="1" type="number">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-4 control-label" >Nome</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="nome" value="<?=$aluno->getNome()?>" required placeholder="José da Silva" class="form-control" required  type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Curso</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">

                            <select name="curso_c" class="form-control selectpicker">
                                <?php foreach ($curso AS $curso){?>
                                    <option value="<?=$curso->codigo?>"><?=$curso->nome?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                </div>


<!----------
                <div class="form-group">
                    <img  style="width: 80px;"  src="./images/<?=$aluno->getFoto()?>"><br>
                    <label class="col-md-4 control-label">Foto</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input  name="arquivo" type="file" value="<?=$aluno->getFoto()?>" class="form-control">
                        </div>
                    </div>
                </div>

-->

                <div class="form-group">
                    <label class="col-md-4 control-label" >Turma</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="turma" value="<?=$aluno->getTurma()?>" required placeholder="2" class="form-control" min="1"  type="number">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-4 control-label" >Situação</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="situacao" value="<?=$aluno->getSituacao()?>" required placeholder="Ativo" class="form-control" required  type="text">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Data da Matrícula</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input type="date" name="data_matricula" class="form-control" required value="<?=$aluno->getDtaMatricula()?>" required  type="text">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Cep</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="cep" id="cep" value="<?=$aluno->getCep()?>" required placeholder="11.111-111" class="form-control"  type="text">
                        </div>
                    </div>
                </div>




                <div class="form-group">
                    <label class="col-md-4 control-label">Logradouro</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="logradouro" value="<?=$aluno->getLogradouro()?>" required  id="logradouro" placeholder="Rua da mata" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Cidade</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="cidade" id="cidade" value="<?=$aluno->getCidade()?>" required placeholder="Belo Horizonte" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Estado</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="estado" id="estado" required placeholder="MG" value="<?=$aluno->getEstado()?>" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Bairro</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="bairro" id="bairro" required placeholder="Cidade Nova" value="<?=$aluno->getBairro()?>" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Numero</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="numero" id="numero" placeholder="35" class="form-control" value="<?=$aluno->getNumero()?>" min="1" type="number">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Complemento</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            <input name="complemento" required id="complemento" placeholder="Apartamento 101" value="<?=$aluno->getComplemento()?>" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        <a class="btn btn-danger"  href="?classe=aluno&acao=all">Voltar</a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" value="Salvar" class="btn btn-success" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSALVAR &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                    </div>
                </div>

            </fieldset>
    </form>
</div>
</div><!-- /.container -->
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

























































