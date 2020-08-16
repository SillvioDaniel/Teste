<?php

require_once "model/admin.php";
class adminController
{
    public function validalogin(){
        $admin = new admin();
        if (isset($_POST["email"])&& isset($_POST["senha"])){
            $admin->setEmail($_POST["email"]);
            $admin->setSenha($_POST["senha"]);
            $admin->validarlogin();

            if($admin->validarlogin())
            {
                header("Location:./?classe=aluno&acao=all");
            }

            else
            {
       echo "<script>alert('Email ou senha incorretos')</script>";
            }


        }
        require_once 'view/login.php';
    }

}


