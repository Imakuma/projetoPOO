<?php
 
 //CRIANDO CLASSES (sempre um arquivo por classe e o nome do arquivo tem padrao comecar com maiuscula)

    class Pessoas{
        //ATRIBUTOS da classe sao tao simples como criar variaves
        private $nome;
        private $idade;
        private $cpf;

        //METODOS das classes sao as funcoes

        public function getNome(){
            return $this->nome;
        }

        // public function setNome($novoNome){
        //     $nome=$novoNome;
        // }
    //a funcao de cima pode ser escrita desta forma (padrao) para que nao se fique criando novos nomes (usando o $this que é diferente da utilização do JS)

        public function setNome($nome){
            $this->nome=$nome;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($idade){
            $this->idade=$idade;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf($cpf){
            $this->cpf=$cpf;
        }

        public function cadastrarPessoa($con){
            $this->nome;

        }
        
    }