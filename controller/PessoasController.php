<?php
require_once "model/Pessoas.php";
require_once "model/Usuarios.php";
require_once "model/Funcionarios.php";
require_once "model/conexao.php";

class PessoasController {


    public function view($server){
       global $con;

        switch($server){
            case "GET":
                require_once "view/cadastro.php";
                break;
            case "POST":
                    
                $tipoPessoa = $_POST["tipoPessoa"];
                $nome = $_POST["nome"];
                $idade = $_POST["idade"];
                $cpf = $_POST["cpf"];
                $usuario = $_POST["usuario"];
                $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
                $salario = $_POST["salario"];
                
               
                if ($tipoPessoa == "usuario"){
                    // $novoUsuario = new Usuarios();
                    // //apesar da classe usuario nao ter nome, colocamos que ela herda da classe pessoas e por isso podemos determinar abaixo:
                    // $novoUsuario->setNome(("$_POST["nome"]");
                    // $novoUsuario->setIdade("$_POST["idade"]");
                    // $novoUsuario->setCpf("$_POST["cpf"]")

                    //--------No metodo construtor podemos substituir os sets acima por:
                    

                    $novoUsuario = new Usuarios(
                        $nome,
                        $idade,
                        $cpf,
                        $usuario,
                        $senha
                    );
                    
                    if($novoUsuario->cadastrarPessoa($con, $novoUsuario,$tipoPessoa)){

                        $_REQUEST["pessoa"] = $novoUsuario;
                        
                        require_once "view/sucesso.php";
                    
                    }else{

                        echo "deu ruim";
                    }

                    break;              



                }elseif($tipoPessoa == "funcionario"){
                    $novoFuncionario = new Funcionarios(
                        $nome,
                        $idade,
                        $cpf,
                        $usuario,
                        $senha,
                        $salario

                    );
                    if($novoFuncionario->cadastrarPessoa($con, $novoFuncionario, $tipoPessoa)){
                        $_REQUEST["pessoa"] = $novoFuncionario;
                        require_once "view/sucesso.php";

                    }else{

                        echo "deu ruim funcionario";
                    }

                    }
                }

                // $novaPessoa = new Pessoas();
                // $novaPessoa->setNome($_POST["nome"]);
                // $novaPessoa->setIdade($_POST["idade"]);
                // $novaPessoa->setCpf($_POST["cpf"]);

                // $_REQUEST["pessoa"] = $novaPessoa;
                // $_REQUEST["pessoa"] = $novoUsuario;

                // require_once "view/sucesso.php";



                // break;
        }
        
    }





?>