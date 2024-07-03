<?php
include_once("service/conexao.php");
include_once("controller/controllerTiposProcedimento.php");
include_once("model/modelTiposProcedimento.php");

$data = json_decode(file_get_contents('php://input'),true);

$descricao_procedimento = $data["descricao_procedimento"];

$controllerTiposProcedimentos new $controllerTiposProcedimentos();
$resultado = $controllerTiposProcedimento->cadastrarTiposProcedimento($descricao_procedimento);

if($resultado){
    $msg = array("msg => Cadastro Realizado Com Sucesso!");
    echo json_encode($msg);
} else {
    $msg = array("msg => Erro ao Cadastrar!");
    echo json_encode($msg);
}





?>