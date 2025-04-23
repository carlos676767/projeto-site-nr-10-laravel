<?php

namespace app\Models;

use Illuminate\Support\Facades\DB;



final class ModelGetUserId
{
    static public function getUserId( $userId)
    {
        $result = DB::select('select control.usuario, control.role, control.id from control where id = ? limit 1', [
            $userId
        ]);

        return (array) $result;
    }
}
