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
        Schema::create('tb_orangtua', function (Blueprint $table) {
            $table->id('id_ortu');
            $table->string('nik_ortu')->unique();
            $table->string('nama_ortu');
            $table->string('alamat_ortu')->nullable();
            $table->string('no_hp_ortu')->nullable();
            $table->enum('jk_ortu', ['laki-laki', 'perempuan'])->nullable();
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_orangtua');
    }
};
