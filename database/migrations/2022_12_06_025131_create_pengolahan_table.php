<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengolahanTable extends Migration
{
    /**
     * Run the migrations.
     *{}
     * @return void
     */
    public function up()
    {
        Schema::create('pengolahan', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_pengolahan');
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
        Schema::dropIfExists('pengolahan');
    }
}
