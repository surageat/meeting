<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('DE_meet');
            $table->integer('HA_id')->unsigned();
            $table->integer('OF_id')->unsigned();
            $table->timestamps();
             //foreign key
             $table->foreign('HA_id')->references('id')->on('heading_agendas')->onDelete('cascade');
             $table->foreign('OF_id')->references('id')->on('offices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
