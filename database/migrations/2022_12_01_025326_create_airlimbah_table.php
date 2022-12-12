<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirlimbahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airlimbah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('perusahaan_id')->constrained('table_perusahaan')->onUpdate('cascade')->onDelete('cascade');
            $table->string('informasi_air');
            $table->string('jumlah_airbaku');
            $table->string('jumlah_airlimbah');
            $table->string('kapasitas_ipal');
            $table->string('pengolahan_id');
            $table->string('lokasi_pembuangan');
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
        Schema::dropIfExists('airlimbah');
    }
}
