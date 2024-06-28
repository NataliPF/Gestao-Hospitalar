<?php

class controllerStatus{

    public function listarStatus(){
        try{
            $modelStatus = new modelStatus();
            return $modelStatus->listarStatus();
        }catch(PDOException $e){
            return false;
        }
    }

    public function cadastrarStatus($descricao_status){
        try{
            $modelStatus = new modelStatus();
            return $modelStatus->cadastrarStatus($descricao_status);
        }catch(PDOException $e){
            return false;
        }
    }

    public function atualizarStatus($descricao_status){
        try{
            $modelStatus = new modelStatus();
            return $modelStatus->atualizarStatus($descricao_status);
        }catch(PDOException $e){
            return false;
        }
    }
}