<?php


class admin
{
private $id;
private $email;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
private $senha;
private $con;

    /**
     * admin constructor.
     * @param $id
     * @param $email
     * @param $senha
     */
    public function __construct($id = NULL, $email = NULL , $senha = NULL)
    {
        $this->id = $id;
        $this->email = $email;
        $this->senha = $senha;
        $this->con = new PDO(SERVIDOR,USUARIO,SENHA);
    }
    public function validarlogin(){
        $sql = $this->con->prepare("SELECT * from admin where email =? and senha =?");
        $sql->execute(array($this->email,$this->senha));
        return $sql->fetchAll(PDO::FETCH_CLASS);
    }
}