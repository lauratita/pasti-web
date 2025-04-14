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
        Schema::create('tb_siswa', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->string('nis', 20)->unique();
            $table->string('nama_siswa', 50)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->year('tahun_akademik')->nullable();
            $table->string('password', 255)->nullable();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan'])->nullable();
            $table->string('alamat', 255)->nullable();
            $table->string('foto', 255)->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->date('tanggal_berakhir')->nullable();
            $table->foreignId('id_kelas')->constrained('tb_kelas', 'id_kelas')->onDelete('cascade');
            $table->foreignId('id_ortu')->constrained('tb_orangtua', 'id_ortu')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_siswa');
    }
};
