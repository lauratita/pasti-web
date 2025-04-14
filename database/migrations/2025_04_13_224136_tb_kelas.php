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
        Schema::create('tb_jeniskelas', function (Blueprint $table) {
            $table->id('id_jeniskelas');
            $table->integer('kelas');
            $table->timestamps();
        });

        DB::table('tb_jeniskelas')->insert([
            ['kelas' => '10'],
            ['kelas' => '11'],
            ['kelas' => '12'],
        ]);

        Schema::create('tb_jurusan', function (Blueprint $table) {
            $table->id(column: 'id_jurusan');
            $table->string('nama_jurusan', 200)->nullable();
            $table->timestamps();
        });

        Schema::create('tb_kelas', function (Blueprint $table) {
            $table->id('id_kelas');
            $table->string('nama_kelas', 50)->nullable();
            $table->foreignId('id_jeniskelas')->constrained('tb_jeniskelas', 'id_jeniskelas')->onDelete('cascade');
            $table->foreignId('id_jurusan')->constrained('tb_jurusan', 'id_jurusan')->onDelete('cascade');
            $table->foreignId('id_pegawai')->constrained('tb_pegawai', 'id_pegawai')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kelas');
        Schema::dropIfExists('tb_jeniskelas');
        Schema::dropIfExists('tb_jurusan');
    }
};
