<?php

namespace app\Models;

use Illuminate\Support\Facades\DB;

final class ModelInsertControll
{
    public static function insertUser(string $usuario, string $senha, string $role)
    {
        try {
            DB::beginTransaction();

            DB::insert(
                "INSERT INTO CONTROL (usuario, senha, role) VALUES (?, ?, ?)",
                [$usuario, $senha, $role]
            );

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw new \Exception("Erro ao registrar colaborador", 1);
        }
    }
}
