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
    Schema::table('arsips', function (Blueprint $table) {
        $table->date('tanggal_pembuatan')->nullable()->after('waktu_arsip');
        $table->date('tanggal_revisi')->nullable()->after('tanggal_pembuatan');
    });
}

public function down()
{
    Schema::table('arsips', function (Blueprint $table) {
        $table->dropColumn(['tanggal_pembuatan', 'tanggal_revisi']);
    });
}

};
