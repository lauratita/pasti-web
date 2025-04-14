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
        Schema::create('tb_suratizin', function (Blueprint $table) {
            $table->id('id_suratizin');
            $table->enum('keterangan', ['izin', 'sakit'])->nullable();
            $table->enum('status', ['verified', 'unverified', 'disable'])->nullable();
            $table->date('tanggal')->nullable();
            $table->date('tenggat')->nullable();
            $table->string('foto_surat', 255)->nullable();
            $table->foreignId('id_siswa')->constrained('tb_siswa', 'id_siswa')->onDelete('cascade');
            $table->foreignId('id_pegawai')->constrained('tb_pegawai', 'id_pegawai')->onDelete('cascade');
            $table->foreignId('id_ortu')->constrained('tb_orangtua', 'id_ortu')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_suratizin');
    }
};
