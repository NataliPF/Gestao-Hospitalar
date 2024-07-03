<?php

class controllerProcedimentos{
    
    public function listarProcedimentos(){
        try {
                $modelProcedimentos = new modelProcedimentos();
                return $modelProcedimentos->listarProcedimentos(); 
            } catch (PDOException $e) {
                return false;
            }
    }

    public function cadastrarProcedimentos($descricao_procedimento){
        try {
            $modelProcedimentos = new modelProcedimentos();
            return $modelProcedimentos->cadastarProcedimento($descricao_procedimento);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarProcedimentos($descricao_procedimento, $id_tipos_procedimento){
        try {
            $modelProcedimentos = new modelProcedimentos();
            return $modelProcedimentos->atualizarProcedimento($descricao_procedimento, $id_tipos_procedimento);
        } catch (PDOException $e) {
            return false;
            
        }
    }
}


?>