<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertek', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('id_perusahaan')->constrained('table_nib')->onDelete('cascade')->onUpdate('cascade');
            // $table->string('surat_permohonan');
            // $table->string('surat_persetujuan_pembuangan_air');
            // $table->string('surat_persetujuan_pembuangan_formasi');
            // $table->string('surat_persetujuan_pemanfaatan_formasi');
            $table->string('nama_pertek');
            $table->date('tgl_pertek');
            $table->string('no_slo');
            $table->date('tgl_slo');
            $table->string('media_limbah');
            $table->string('no_rekomendasi');
            $table->string('tikor_perusahaan')->nullable();
            $table->string('tikor_ipal')->nullable();
            $table->string('tikor_oval')->nullable();
            $table->string('tikor_pantau')->nullable();

            // $table->string('upload_dokumen');
            // $table->string('status')->default(0);
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
        Schema::dropIfExists('pertek');
    }
}