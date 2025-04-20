<?php

namespace App\utils;

final class ValideUtils
{
    static public function valideBody(array $list)
    {
        $objectValues = array_values($list);
        $filterSpace = array_filter($objectValues, fn($char) => $char != "");

        if (count($filterSpace) !== count($objectValues)) {
            throw new \Exception("Por favor preencha todos os campos - NR 10 SYSTEM", 1);
        }
    }


    static public function validePass(string $pass){
      

        $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{6,}$/';

        if (!preg_match($pattern, $pass)) {
            throw new \Exception("A senha deve ter pelo menos 6 caracteres, incluindo uma letra maiúscula, uma letra minúscula, um número e um caractere especial.", 3);
        }
    }


    static public function valideEmail( string  $email ){
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            throw new \Exception("Digite um email valido", 1);
        }
    }
}
