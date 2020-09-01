<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participate_meetings', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('Meet_id')->unsigned();
            $table->string('Status');
            $table->string('Annotation');
            $table->timestamps();
            //foreign key
            $table->foreign('Meet_id')->references('id')->on('meetings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participate_meetings');
    }
}
