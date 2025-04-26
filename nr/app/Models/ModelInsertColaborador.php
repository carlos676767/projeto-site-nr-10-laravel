<?php

namespace app\Models;

use Illuminate\Support\Facades\DB;

final class ModelInsertColaborador
{
    static public function insertColaborador($colaborador, $cpf, $setor, $funcao, $sexo, $data)
    {
       try {
        $query = "INSERT INTO colaborador (colaborador,cpf , SETOR,funcao, sexo, hora_cadastro  ) 
        VALUES (?, ?, ?, ?, ?, ?)";

        DB::beginTransaction();
        
        DB::insert($query, [
            $colaborador,
            $cpf,
            $setor,
            $funcao,
            $sexo,
            $data
        ]);
        

        DB::commit();
       } catch (\Throwable $th) {
        DB::rollBack();
        throw new \Exception("Erro ao cadastrar Funcionario, tente novamente.", 1);
        
       }
    }
}
