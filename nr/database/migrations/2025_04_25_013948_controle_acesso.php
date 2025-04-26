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
        CREATE TABLE IF NOT EXISTS CONTROL (
          id INT AUTO_INCREMENT PRIMARY KEY,
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
    }
};
