<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_laporan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('laboratorium_id')->constrained('table_laboratorium')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('perusahaan_id')->constrained('table_perusahaan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('status_id')->constrained('status')->onUpdate('cascade')->onDelete('cascade');
            $table->string('kode');
            $table->string('nama_petugas');
            $table->string('jenis_sampling');
            $table->string('parameter');
            $table->date('tanggal_sampling');
            $table->string('filescan_laporan');
            $table->string('jmlh_inlet')->nullable();
            $table->string('jmlh_outlet')->nullable();
            $table->string('jmlh_debit')->nullable();
            $table->string('jmlh_ph')->nullable();
            $table->string('jmlh_suhu')->nullable();
            $table->string('jmlh_tss')->nullable();
            $table->string('jmlh_tds')->nullable();
            $table->string('jmlh_bod')->nullable();
            $table->string('jmlh_amoniak')->nullable();
            $table->string('jmlh_minyak')->nullable();
            $table->string('jmlh_caliform')->nullable();
            $table->string('jmlh_bakteri')->nullable();
            $table->string('jmlh_mbas')->nullable();
            $table->string('jmlh_sulfida')->nullable();
            $table->string('jmlh_nitrat')->nullable();
            $table->string('jmlh_nitrit')->nullable();
            $table->string('jmlh_pshospat')->nullable();
            $table->string('jmlh_fenol')->nullable();
            $table->string('jmlh_khorm')->nullable();
            $table->string('jmlh_seng')->nullable();
            $table->string('jmlh_klorida')->nullable();
            $table->string('jmlh_klor')->nullable();
            $table->string('jmlh_fluorida')->nullable();
            $table->string('jmlh_warna')->nullable();
            $table->string('jmlh_cod')->nullable();
            $table->string('jmlh_produksi')->nullable();
            $table->string('jmlh_hunian')->nullable();
            $table->string('jmlh_bed')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_laporan');
    }
}
