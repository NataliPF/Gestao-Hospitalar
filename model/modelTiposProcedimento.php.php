<?php

class modelTiposProcedimento {

    public function listarProcedimentos() {
        try {
            $pdo = Database ::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_tipos_procedimento");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
             return = $resultado;
        } catch (PDOExption $e) {
            return false;
        }
      }

      public function cadastrarTiposprocedimento($descricao_procedimento) {
        try {
            $pdo = Database :: conexao();
            $cadastrar = $pdo->prepare("INSERT INTO tbl_tipos_procedimneto");
            $cadastrar->bindParam("descricao_procedimento", $descricao_procedimento);

            $cadastrar->execute();
            return true;
      } catch (PDOException $e) {
        return false;
      }
    }

    public function atualizarProcedimento($descricao_procedimento, $id_tipos_procedimento) {
        try {
            $pdo = Database :: conexao();
            $atualizar = $pdo->prepare("UPDATE tbl_tipos_procedimento SET descricao_procedimento WHERE id_tiposprocedimento=:id_tipos_procedimento");
            $atualizar->bindParam("descricao_procedimento", $descricao_procedimento);
            $atualizar->bindParam("id_tipos_procedimento", $id_tipos_procedimento);
            $atualizar->execute();
            return true;
        } catch (PDOException $e) {
            return false;
            
            }
         }
     }
       
    



?>