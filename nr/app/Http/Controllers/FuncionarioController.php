<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\utils\ValideUtils;
use App\Models\insertFuncionario;
use function App\utils\returnData;
use App\Models\ModelInsertColaborador;

final class FuncionarioController
{
    static public function insertFuncionario( Request $req)
    {
        try {
            $data = $req->all();
            ValideUtils::valideBody($data);

            [
                'nomeFuncionario'   => $nomeFuncionario,
                'cpfFuncionario'    => $cpfFuncionario,
                'setorFuncionario'  => $setorFuncionario,
                'funcaoFuncionario' => $funcaoFuncionario,
                'sexo'              => $sexo,
            ] = $data;

            ValideUtils::valideBody($cpfFuncionario);
            ValideUtils::valideNameUser($nomeFuncionario);
            ValideUtils::valideSexo($sexo);
            $dataYear = returnData();
            ModelInsertColaborador::insertColaborador($nomeFuncionario, $cpfFuncionario, $setorFuncionario, $funcaoFuncionario, $sexo, $dataYear);
            return response()->json([
                'success' => 'Colaborador cadastrado com sucesso',

            ], 200);



        } catch (\Throwable $th) {
            return response()->json([
                'err' => $th->getMessage(),

            ], 400);
        }
    }
}
