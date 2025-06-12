<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('arsips')) {
            Schema::create('arsips', function (Blueprint $table) {
                $table->id();
                $table->string('nomor_surat');
                $table->foreignId('kategori_id')->constrained('kategori');
                $table->string('judul');
                $table->string('file_surat');
                $table->timestamp('waktu_arsip');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arsip');
    }
};
