<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('Meet_heading');
            $table->string('Meet_date');
            $table->string('Meet_no');
            $table->string('Meet_time');
            $table->string('Meet_place');
            $table->string('Meet_table');
            $table->integer('OF_id')->unsigned();
            $table->integer('MR_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('OF_id')->references('id')->on('offices')->onDelete('cascade');
            $table->foreign('MR_id')->references('id')->on('meeting_rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meetings');
    }
}
