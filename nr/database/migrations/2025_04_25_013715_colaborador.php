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
            cpf CHAR(11) UNIQUE NOT NULL,
            SETOR VARCHAR(255) NOT NULL,
            funcao varchar(255) NOT NULL,
            sexo enum('Masculino', 'Feminino', 'Outro'),
            hora_cadastro varchar(255) NOT NULL
        )
    ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP TABLE IF EXISTS COLABORADOR");
    }
};
