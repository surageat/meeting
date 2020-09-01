<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadingAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heading_agendas', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('Heading');
            $table->string('HA_meet');
            $table->integer('Meet_id')->unsigned();
            $table->integer('MA_id')->unsigned();  
            $table->integer('OF_id')->unsigned();
            $table->timestamps();
             //foreign key
             $table->foreign('MA_id')->references('id')->on('meeting_agendas')->onDelete('cascade');
             $table->foreign('Meet_id')->references('id')->on('meetings')->onDelete('cascade');
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
        Schema::dropIfExists('heading_agendas');
    }
}
