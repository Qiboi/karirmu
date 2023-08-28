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
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id();                
            $table->bigInteger('id_perusahaan')->unsigned();
            $table->string('posisi');
            $table->string('lokasi');
            $table->string('id_skill');
            $table->string('id_jurusan');
            $table->string('gaji');
            $table->string('kontak');
            $table->integer('kuota');
            $table->date('tutup');
            $table->boolean('status')->nullable()->default(false);

            $table->foreign('id_perusahaan')->references('id')->on('perusahaan')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongan');
    }
};
