<?php
namespace app\Models;

use Illuminate\Support\Facades\DB;



final class ModelLoginControll 
{
    static public function login($user, $pass){
      
        try {

            $dados = DB::select("SELECT * FROM control WHERE usuario = ?", [
                $user
            ]);


            if (!$dados) {
                throw new \Exception("O usuario nao existe", 1);
            }

            $dadosAssociativos = (array) $dados[0];

            ['usuario' => $usuario, 'senha' => $senha, 'id' => $id] = $dadosAssociativos;

            if ($usuario != $user && $senha != $pass) {
                throw new \Exception("dados incorretos", 1);
            }


            return $dadosAssociativos["id"];

        } catch (\Throwable $th) {
          throw new \Exception($th->getMessage(), 1);
          
        }
    }
}


