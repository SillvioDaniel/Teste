<?php


class curso
{
private $codigo;
private $con;

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
private $nome;

    /**
     * curso constructor.
     * @param $codigo
     * @param $nome
     */
    public function __construct($codigo = NULL, $nome = NULL)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->con = new PDO(SERVIDOR,USUARIO,SENHA);
    }
    public  function alterar()
    {
        $sql = $this->con->prepare("SELECT * FROM curso WHERE codigo=?");
        $sql->execute(array($this->codigo));
        $curso = $sql->fetchObject();

        if ($curso) {
            $this->codigo = $curso->codigo;
            $this->nome = $curso->nome;

        }
    }

    public function salvar(){
        $sql= $this->con->prepare("UPDATE curso set nome =? where codigo = ?");
        $sql->execute(array($this->nome,$this->codigo));
    }

    public function excluir(){
        $sql = $this->con->prepare("DELETE from curso WHERE codigo=?");
        $sql->execute(array($this->codigo));
        print_r($sql->errorInfo());
    }
    public function novo(){
        $sql = $this->con->prepare("INSERT INTO curso values(NULL,?)");
        $sql->execute(array($this->nome));
        print_r($sql->errorInfo());

        }

    public function all(){
        $sql= $this->con->prepare("SELECT * FROM curso ");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS);
        print_r($sql->errorInfo());
    }
    public function cursocodigo(){
        $sql = $this->con->prepare("SELECT * from curso where codigo =?");
        $sql->execute(array($this->codigo));
        $aluno = $sql->fetchObject();

    }
    public function importar()
    {
        $sql = $this->con->prepare("INSERT INTO curso values(?,?)");
        $sql->execute(array($this->codigo,$this->nome));


        }


}