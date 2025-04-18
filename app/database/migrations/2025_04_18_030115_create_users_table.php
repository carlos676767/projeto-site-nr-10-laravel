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
        DB::statement(
            "CREATE TABLE IF NOT EXISTS USER(
            NAME VARCHAR(255) NOT NULL,
            cpf VARCHAR(255) NOT NULL
            )"
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {}
};
