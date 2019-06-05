<?php

class Usuarios extends Pessoas {
    private $login;
    private $senha;

    // metodo construtor 
    function __construct($nome,$idade,$cpf,$login,$senha){
        parent::__construct($nome,$idade,$cpf);
        $this->login = $login;
        $this->senha = $senha;
    }
    //-----------

    public function getLogin(){
        return $this->login;
    }
    public function setLogin(){
        $this->login = $login;
    }

    public function getSenha(){
        return $this->senha;
    }
    public function setSenha(){
        $this->senha = $senha;
    }

    public function cadastrarPessoa($con,$pessoa){
        try{
            
            $query=$con->prepare("INSERT INTO usuarios (nome, idade, cpf, usuario, senha) VALUES(?,?,?,?,?)");
           
            $query->execute([
                $pessoa->getNome(),
                $pessoa->getIdade(),
                $pessoa->getCpf(),
                $pessoa->getLogin(),
                $pessoa->getSenha()
            ]);

            return $query;
           
           
           
        }catch(PDOException $e){
            return false;
        }
    


    } 



}



?>
