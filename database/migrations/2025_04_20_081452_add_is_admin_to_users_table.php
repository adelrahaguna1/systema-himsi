<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Tambahkan kolom boolean 'is_admin'
            // - default(false): Secara default, pengguna baru bukan admin
            // - after('remember_token'): Posisi kolom (opsional, agar rapi)
            $table->boolean('is_admin')->default(false)->after('remember_token');
        });
    }

    /**
     * Reverse the migrations.
     * (Apa yang terjadi jika migration di-rollback)
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Hapus kolom 'is_admin' jika di-rollback
            $table->dropColumn('is_admin');
        });
    }
};
