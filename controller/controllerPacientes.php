<?php 


class controllerPacientes{
    public function listarPacientes(){
        try{
            $modelPacientes = new modelPacientes();
            return $modelPacientes->listarPacientes();
        } catch(PDOException $e){
            return false;
        }

    }

    public function cadastrarPaciente($nome_paciente, $sobrenome_paciente, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf){
        try{
            $modelPacientes = new modelPacientes();
            return $modelPacientes->cadastrarPaciente($nome_paciente, $sobrenome_paciente, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf);
        }catch(PDOException $e) {
            return false;
        }
    }

    public function atualizarPaciente($nome_paciente, $sobrenome_paciente, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf){
        try{
            $modelPacientes = new modelPacientes();
            return $modelPacientes->atualizarPaciente($nome_paciente, $sobrenome_paciente, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf);
        } catch(PDOException $e){
            return false;
        }
    }
}