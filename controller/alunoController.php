<?php
require_once "model/aluno.php";
require_once "model/curso.php";

class alunoController
{
public function all(){
    $obj = new aluno();
    $aluno = $obj->all();
    require_once 'view/aluno_all.php';

}
    public function excluir()
    {
        $aluno = new aluno($_GET['matricula']);
        $aluno->excluir();

        require_once ("view/aluno_excluir.php");
        header("Location:./?classe=aluno&acao=all");
    }
    public function novo()
    {


        if (isset($_POST['matricula'])&& isset($_POST['nome'])&&  isset($_POST['turma'])&&  isset($_POST['situacao'])&& isset($_POST['cep'])&& isset($_POST['logradouro'])&& isset($_POST['cidade'])&& isset($_POST['estado'])&& isset($_POST['bairro'])&& isset($_POST['numero'])&&  isset($_POST['curso_c'])) {
            $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
            $nome = md5(time()).$extensao;
            $diretorio = "images/";

            move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$nome);
            $aluno = new aluno();
            $aluno->setMatricula($_POST['matricula']);
            $aluno->setNome($_POST['nome']);
            $aluno->setFoto($nome);
            $aluno->setTurma($_POST['turma']);
            $aluno->setSituacao($_POST['situacao']);
            $aluno->setCep($_POST['cep']);
            $aluno->setLogradouro($_POST['logradouro']);
            $aluno->setCidade($_POST['cidade']);
            $aluno->setEstado($_POST['estado']);
            $aluno->setBairro($_POST['bairro']);
            $aluno->setNumero($_POST['numero']);
            $aluno->setComplemento($_POST['complemento']);
            $aluno->setCursoC($_POST['curso_c']);

            $aluno->novo();

            header("Location:./?classe=aluno&acao=all");
        }

        $obj = new curso();
        $curso = $obj->all();

        require_once ("view/aluno_novo.php");
    }
    public function alterar()
    {
        $aluno = new aluno($_GET['matricula']);

        if (isset($_POST['nome'])){



            $aluno->setNome($_POST['nome']);

            $aluno->setTurma($_POST['turma']);
            $aluno->setDtaMatricula($_POST['data_matricula']);
            $aluno->setSituacao($_POST['situacao']);
            $aluno->setCep($_POST['cep']);
            $aluno->setLogradouro($_POST['logradouro']);
            $aluno->setCidade($_POST['cidade']);
            $aluno->setEstado($_POST['estado']);
            $aluno->setBairro($_POST['bairro']);
            $aluno->setNumero($_POST['numero']);
            $aluno->setComplemento($_POST['complemento']);
            $aluno->setCursoC($_POST['curso_c']);

            $aluno->salvar();
            header("Location:./?classe=aluno&acao=all");
        }


        $obj = new curso();
        $curso = $obj->all();

        $aluno->alterar();
        require_once 'view/aluno_edit.php';


    }
    public function filtrar()
    {
        if ($_POST["matricula"]!="") {
            $obj = new aluno();
            $aluno = $obj->filtrar($_POST['matricula']);
        }else{
            header("Location:?classe=aluno&acao=all");

        }


        require_once 'view/aluno_all.php';

    }


    }