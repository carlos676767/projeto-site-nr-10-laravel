<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
            CREATE TABLE IF NOT EXISTS COLABORADOR (
                id_user INT AUTO_INCREMENT PRIMARY KEY,
                colaborador VARCHAR(255) NOT NULL,
                cpf CHAR(11) UNIQUE NOT NULL
            )
        ");

        DB::statement("
            CREATE TABLE IF NOT EXISTS CURSO (
                vencimento_nr VARCHAR(255) NOT NULL,
                status ENUM('concluido', 'em andamento') NOT NULL,
                ano_conclusao_curso VARCHAR(255),
                idUser INT,
                FOREIGN KEY (idUser) REFERENCES COLABORADOR(id_user)
            )
        ");

        DB::statement("
            CREATE TABLE IF NOT EXISTS CONTROL (
                usuario VARCHAR(255) NOT NULL,
                senha VARCHAR(255) NOT NULL,
                role ENUM('tecnico', 'estagiario') NOT NULL
            )
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP TABLE IF EXISTS CONTROL");
        DB::statement("DROP TABLE IF EXISTS CURSO");
        DB::statement("DROP TABLE IF EXISTS COLABORADOR");
    }
};