<?php

use Carbon\Traits\Timestamp;
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
        //
        Schema::create('tb_presensi', function (Blueprint $table) {
            $table->id('id_presensi');
            $table->date('tanggal')->nullable();
            $table->time('jam_datang')->nullable();
            $table->time('jam_pulang')->nullable();
            $table->enum('keterangan', ['alpa', 'hadir', 'izin', 'sakit'])->nullable();
            $table->integer('is_late')->default(0);
            $table->foreignId('id_siswa')->constrained('tb_siswa', 'id_siswa')->onDelete('cascade');
            $table->foreignId('id_suratizin')->constrained('tb_suratizin', 'id_suratizin')->onDelete('cascade');
            $table->foreignId('id_kelas')->constrained('tb_kelas', 'id_kelas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tb_presensi');
    }
};
