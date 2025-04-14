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
        Schema::create('tb_mapel', function (Blueprint $table) {
            $table->id('id_mapel');
            $table->string('kd_mapel', 10)->unique();
            $table->string('nama', 50);
            $table->enum('is_mapel', ['0', '1']);
            $table->timestamps();
        });

        Schema::create('tb_jadwal_mapel', function (Blueprint $table) {
            $table->id('id_jadwal_mapel');
            $table->enum('hari', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'])->nullable();
            $table->time('jam_awal')->nullable();
            $table->time('jam_akhir')->nullable();
            $table->foreignId('id_mapel')->constrained('tb_mapel', 'id_mapel')->onDelete('cascade');
            $table->foreignId('id_kelas')->constrained('tb_kelas', 'id_kelas')->onDelete('cascade');
            $table->foreignId('id_pegawai')->constrained('tb_pegawai', 'id_pegawai')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_jadwal_mapel');
        Schema::dropIfExists('tb_mapel');
    }
};
