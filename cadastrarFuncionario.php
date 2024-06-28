<?php

include_once ("services/conexaoBanco.php");
include_once ("controller/controllerFuncionarios.php");
include_once ("model/modelFuncionarios.php");

$data = json_decode(file_get_contents('php://input'), true);

$nome_funcionario = $data["nome"];
$sobrenome_funcionario = $data["sobrenome"];

$controllerFuncionarios = new controllerFuncionarios();
$resultado = $controllerFuncionarios->cadastrarFuncionarios($nome_funcionario,$sobrenome_funcionario);

if($resultado) echo "Funcionario cadastrado com sucesso";


?>