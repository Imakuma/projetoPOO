<?php

// //CRIANDO UM OBJETO

// require_once "Pessoas.php";

// $pessoa = new Pessoas();

// // var_dump ($pessoa);

// $pessoa->setNome("Vini");
// $pessoa->setidade("21");

// var_dump ($pessoa);
//-------------------------------------- 


$controller = key($_GET);
$controller.="Controller";

require_once "controller/$controller.php";
$obj=new $controller();
$obj->view($_SERVER['REQUEST_METHOD']);

?>