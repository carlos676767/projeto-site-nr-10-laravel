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


    static public function validePass(string $pass)
    {


        $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{6,}$/';

        if (!preg_match($pattern, $pass)) {
            throw new \Exception("A senha deve ter pelo menos 6 caracteres, incluindo uma letra maiúscula, uma letra minúscula, um número e um caractere especial.", 3);
        }
    }


    static public function valideEmail(string  $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \Exception("Digite um email valido", 1);
        }
    }





    static public function cpfValide(string $cpf)
    {
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        if (strlen($cpf) !== 11) {
            throw new \Exception("O cpf precisa ter 11 de comprimento", 1);
        }


        $list = [];


        for ($i = 0; $i < strlen($cpf); $i++) {
            if ($cpf[$i] == $cpf[$i + 1]) {
                array_push($list, $cpf[$i]);
            }
        }

        if (count($list) === strlen($cpf) - 1) {
            throw new \Exception("CPF inválido: todos os dígitos são iguais.");
        }
    }


    static public function valideNameUser(string $nameUser)
    {

        if (strlen($nameUser) < 2 || strlen($nameUser) > 100) {
            throw new \Exception("O nome precisa ter entre 2 e 100 caracteres.", 1);
        }


        if (preg_match('/[^a-zA-Z0-9]/', $nameUser)) {
            throw new \Exception("O nome tem caracteres especiais", 1);
        }

    }


    static public function valideSexo(string $sexo)
    {
        $valoresValidos = ['Masculino', 'Feminino', 'Outro'];
    
        if (!in_array($sexo, $valoresValidos)) {
            throw new \Exception("O sexo informado é inválido. Valores aceitos: " . implode(', ', $valoresValidos));
        }
    }
    
}
