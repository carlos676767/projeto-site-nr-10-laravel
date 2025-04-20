<?php
nameSpace App\service;

final class ServiceVerifyRoleControll 
{
    static public  function roleValide( string $role ){
        $listRoleValide = [
            'tecnico',
            'estagiario'
        ];

        if (!in_array( $role,  $listRoleValide)) {
            throw new \Exception("Por favor selecione tecnico ou estagiariol.", 1);
        }
    }
}
