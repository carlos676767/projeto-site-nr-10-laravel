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
        CREATE TABLE IF NOT EXISTS CURSO (
            vencimento_nr VARCHAR(255) NOT NULL,
            status ENUM('concluido', 'em andamento') NOT NULL,
            ano_conclusao_curso VARCHAR(255),
            idUser INT,
            FOREIGN KEY (idUser) REFERENCES COLABORADOR(id_user)
        )
    ");

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP TABLE IF EXISTS CURSO");
    }
};
