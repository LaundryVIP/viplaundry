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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // ID unik untuk setiap pengguna
            $table->string('name'); // Nama pengguna
            $table->string('email')->unique(); // Email unik
            $table->timestamp('email_verified_at')->nullable(); // Tanggal verifikasi email
            $table->string('nohp')->nullable(); // Kolom nomor HP, opsional
            $table->text('alamat')->nullable(); // Kolom alamat pengguna, opsional
            $table->string('password'); // Kata sandi
            $table->rememberToken(); // Token untuk fitur "remember me"
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // Menghapus tabel users
    }
};
