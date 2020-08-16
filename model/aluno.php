<?php


class aluno
{
private $matricula;
private $nome;
private $foto;
private $turma;
private $dta_matricula;
private $situacao;
private $cep;

    /**
     * aluno constructor.
     * @param $matricula
     * @param $nome
     * @param $foto
     * @param $turma
     * @param $dta_matricula
     * @param $situacao
     * @param $cep
     * @param $logradouro
     * @param $cidade
     * @param $estado
     * @param $bairro
     * @param $numero
     * @param $complemento
     * @param $curso_c
     * @param $con
     */
    public function __construct($matricula = NULL, $nome = NULL, $foto = NULL, $turma = NULL, $dta_matricula = NULL, $situacao = NULL, $cep = NULL, $logradouro = NULL, $cidade = NULL, $estado = NULL, $bairro = NULL, $numero = NULL, $complemento = NULL, $curso_c = NULL)
    {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->foto = $foto;
        $this->turma = $turma;
        $this->dta_matricula = $dta_matricula;
        $this->situacao = $situacao;
        $this->cep = $cep;
        $this->logradouro = $logradouro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->bairro = $bairro;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->curso_c = $curso_c;
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);

    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
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

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    /**
     * @return mixed
     */
    public function getTurma()
    {
        return $this->turma;
    }

    /**
     * @param mixed $turma
     */
    public function setTurma($turma)
    {
        $this->turma = $turma;
    }

    /**
     * @return mixed
     */
    public function getDtaMatricula()
    {
        return $this->dta_matricula;
    }

    /**
     * @param mixed $dta_matricula
     */
    public function setDtaMatricula($dta_matricula)
    {
        $this->dta_matricula = $dta_matricula;
    }

    /**
     * @return mixed
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * @param mixed $situacao
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * @param mixed $logradouro
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param mixed $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * @return mixed
     */
    public function getCursoC()
    {
        return $this->curso_c;
    }

    /**
     * @param mixed $curso_c
     */
    public function setCursoC($curso_c)
    {
        $this->curso_c = $curso_c;
    }
private $logradouro;
private $cidade;
private $estado;
private $bairro;
private $numero;
private $complemento;
private $curso_c;
private $con;

    public function all(){
        $sql = $this->con->prepare("SELECT * FROM aluno");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS);

    }
    public  function alterar(){
        $sql = $this->con->prepare("SELECT * FROM aluno WHERE matricula=?");
        $sql->execute(array($this->matricula));
        $aluno = $sql->fetchObject();

        if ($aluno) {
            $this->matricula = $aluno->matricula;
            $this->nome = $aluno->nome;
            $this->foto = $aluno->foto;
            $this->turma = $aluno->turma;
            $this->dta_matricula = $aluno->dta_matricula;
            $this->situacao = $aluno->situacao;
            $this->cep = $aluno->cep;
            $this->logradouro = $aluno->logradouro;
            $this->cidade = $aluno->cidade;
            $this->estado = $aluno->estado;
            $this->bairro = $aluno->bairro;
            $this->numero = $aluno->numero;
            $this->complemento = $aluno->complemento;
            $this->curso_c = $aluno->curso_c;
        }
    }
    public function salvar(){
        $sql = $this->con->prepare(" UPDATE aluno set nome =?,turma = ?,dta_matricula = ?,situacao = ?,cep = ?,logradouro = ?,cidade = ?,estado = ?,bairro = ?,numero = ?,complemento = ?,curso_c = ?   WHERE matricula= ?");
        $sql->execute(array($this->nome,$this->turma,$this->dta_matricula,$this->situacao,$this->cep,$this->logradouro,$this->cidade,$this->estado,$this->bairro,$this->numero,$this->complemento,$this->curso_c,$this->matricula));
        print_r($sql->errorInfo());
    }
    public  function excluir(){
        $sql = $this->con->prepare("DELETE from aluno where matricula =?");
        $sql->execute(array($this->matricula));
    }
    public function novo(){
       $sql =  $this->con->prepare("INSERT into aluno values(?,?,?,?,CURRENT_TIMESTAMP,?,?,?,?,?,?,?,?,?)");
       $sql->execute(array($this->matricula,$this->nome,$this->foto,$this->turma,$this->situacao,$this->cep,$this->logradouro,$this->cidade,$this->estado,$this->bairro,$this->numero,$this->complemento,$this->curso_c));
        print_r($sql->errorInfo());

    }
    public function filtrar($var){
        $sql = $this->con->prepare("SELECT * from aluno where matricula =?");
        $sql->execute(array($var));
        return  $sql->fetchAll(PDO::FETCH_CLASS);


    }

}