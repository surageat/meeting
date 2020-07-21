<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternalPersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('external_personnels', function (Blueprint $table) {
            $table->increments('EP_id');
            $table->string('EP_name');
            $table->linestring('EP_position');
            $table->string('EP_tel');
            $table->string('EP_institution');
            $table->string('EP_user');
            $table->string('EP_pass');
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
        Schema::dropIfExists('external_personnels');
    }
}
