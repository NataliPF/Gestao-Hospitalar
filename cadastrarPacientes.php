<?php 

include_once("services/conexaoBanco.php");
include_once("controller/controllerPacientes.php");
include_once("model/modelPacientes.php");

$data = json_decode(file_get_contents('php://input'),true);

$nome_paciente = $data["nome"];
$sobrenome_paciente = $data["sobrenome"];
$email = $data["email"];
$cep = $data["cep"];
$logradouro = $data["logradouro"];
$numero = $data["numero"];
$bairro = $data["bairro"];
$cidade = $data["cidade"];
$uf = $data["uf"];

$controllerPacientes = new controllerPacientes();
$resultado = $controllerPacientes->cadastrarPaciente($nome_paciente, $sobrenome_paciente,$email,$cep,$logradouro,$numero,$bairro,$cidade,$uf);

if($resultado) echo "Paciente cadastrado com sucesso";







?>