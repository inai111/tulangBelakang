<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePerusahaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_perusahaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('bidang_id')->constrained('table_bidang')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('pimpinan_id')->constrained('table_pimpinan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('status_id')->constrained('status')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_perusahaan');
            $table->string('no_izin');
            $table->string('alamat_perusahaan');
            $table->foreignId('kelurahan_id')->constrained('kelurahan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('kecamatan_id')->constrained('kecamatan')->onUpdate('cascade')->onDelete('cascade');
            $table->string('email_perusahaan');
            $table->string('telf_perusahaan');
            $table->string('personil_ppa');
            $table->string('personil_ipal');
            $table->string('tikor_perusahaan');
            $table->string('tikor_ipal');
            $table->string('tikor_oval');
            $table->string('tikor_pantau');
            $table->string('filescan_perusahaan');
            $table->string('foto_perusahaan');
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
        Schema::dropIfExists('table_perusahaan');
    }
}
