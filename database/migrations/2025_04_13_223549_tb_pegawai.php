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
        Schema::create('tb_jenispegawai', function (Blueprint $table) {
            $table->id('id_jenispegawai');
            $table->string('nama', 50)->nullable();
        });

        // DB::table('tb_jenispegawai')->insert([
        //     ['nama' => 'Admin'],
        //     ['nama' => 'Guru'],
        // ]);

        Schema::create('tb_pegawai', function (Blueprint $table) {
            $table->id('id_pegawai');
            $table->string('nik_pegawai', 20)->unique();
            $table->string('nama_pegawai', 50)->nullable();
            $table->string('alamat', 200)->nullable();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan'])->nullable();
            $table->string('password', 255)->nullable();
            $table->string('no_hp', 15)->nullable();
            $table->string('email', 50)->nullable();
            $table->foreignId('id_jenispegawai')->constrained('tb_jenispegawai', 'id_jenispegawai')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pegawai');
        Schema::dropIfExists('tb_jenispegawai');
    }
};
