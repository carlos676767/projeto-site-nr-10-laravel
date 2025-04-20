<?php

namespace App\utils;

use Firebase\JWT\JWT;

class JwtService
{
   
    public static function createToken(array $payload): string
    {
      
        $secretKey = env('JWT_SECRET');

        
     
        $payload['iat'] = time();  
        $payload['exp'] = time() + 3600;  

        return JWT::encode($payload, $secretKey, 'HS256');
    }

   
    public static function decodeToken(string $token)
    {
        
       
        try {
            $secretKey = env('JWT_SECRET_KEY');

            return JWT::decode($token, $secretKey);
        } catch (\Exception $e) {
            throw new \Exception("Erro ao decodificar o JWT: " . $e->getMessage());
        }
    }
}
