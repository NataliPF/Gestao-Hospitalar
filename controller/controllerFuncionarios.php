<?php

class controllerFuncionarios{

    public function listarFuncionarios(){
        try{
            $modelFuncionarios = new modelFuncionarios();
            return $modelFuncionarios->listarFuncionarios();
        }catch(PDOException $e){
            return false;
        }
    }

    public function cadastrarFuncionarios($nome_funcionario, $sobrenome_funcionario){
        try{
            $modelFuncionarios = new modelFuncionarios();
            return $modelFuncionarios->cadastrarFuncionarios($nome_funcionario, $sobrenome_funcionario);
        }catch(PDOException $e){
            return false;
        }
    }

    public function atualizarFuncionarios($nome_funcionario, $sobrenome_funcionario){
        try{
            $modelFuncionarios = new modelFuncionarios();
            return $modelFuncionarios->atualizarFuncionarios($nome_funcionario, $sobrenome_funcionario);
        }catch(PDOException $e){
            return false;
        }
    }
}


?>