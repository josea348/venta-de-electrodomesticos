<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. php artisan migrate
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('cedula');
            $table->string('direccion');
            $table->string('telefono');
        });
    }
    /**
     * Reverse the migrations. php artisan migrate:rollback
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('cedula');
            $table->dropColumn('direccion');
            $table->dropColumn('telefono');
        });
    }
};
