<?php

require_once "model/curso.php";
class cursoController
{
    public function all()
    {
        $obj = new curso();
        $curso = $obj->all();
        require_once 'view/curso_all.php';

    }

    public function excluir()
    {
        $curso = new curso($_GET['codigo']);
        $curso->excluir();

        require_once("view/curso_excluir.php");
        header("Location:./?classe=curso&acao=all");
    }

    public function novo()
    {
        $curso = new curso();

        if (isset($_POST['nome'])) {
            $curso->setNome($_POST['nome']);


            $curso->novo();
            header("Location:./?classe=curso&acao=all");

        }
        require_once("view/curso_novo.php");
    }

    public function alterar()
    {
        $curso = new curso($_GET['codigo']);

        if (isset($_POST['nome'])) {
            $curso->setNome($_POST['nome']);

            $curso->salvar();
            header("Location:./?classe=curso&acao=all");

        }
        $curso->alterar();

        require_once 'view/curso_edit.php';


    }

    public function importar()
    {
        $curso = new curso();

        if (isset($_FILES['xml']['name']) && $_FILES['xml']['name'] != '') {
            $ext = array('xml');
            $dados = explode('.', $_FILES['xml']['name']);
            $extensao = end($dados);

            if (in_array($extensao, $ext)) {
                $xml = simplexml_load_file($_FILES['xml']['tmp_name']);

                $a = 0;
                for ($i = 0; $i < count($xml); $i++) {

                    $curso->setNome($xml->curso[$i]->nome);
                    $curso->setCodigo($xml->curso[$i]->codigo);
                    $curso->importar();

                }
                header("Location:./?classe=curso&acao=all");
            }

        }

        require_once 'view/curso_xml.php';
    }
}