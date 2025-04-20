<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\utils\ValideUtils;
use App\service\ServiceVerifyRoleControll;
use App\Models\ModelInsertControll;
class UserController extends Controller
{
    public static function controllAcessDashboard(Request $req)
    {
        try {

            $data = $req->all();

            ValideUtils::valideBody($data);

            ['usuario' => $usuario, 'senha' => $senha, 'role' => $role] = $data;
            ValideUtils::validePass($senha);
            ServiceVerifyRoleControll::roleValide($role);
            ModelInsertControll::insertUser($usuario, $senha, $role);

            return response()->json([
                'success' => 'Colaborador cadastrado com sucesso',
                'atencao' => 'nao esqueca de quando o colaborador for entrar trocar sua senha.'
            ], 200);
            
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao processar requisição',
                'error' => $th->getMessage()
            ], 500);
        }
    }
}
