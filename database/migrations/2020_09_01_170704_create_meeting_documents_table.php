<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_documents', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('MD_name');
            $table->string('MD_file');
            $table->integer('HA_id')->unsigned();
            $table->timestamps();
             //foreign key
             $table->foreign('HA_id')->references('id')->on('heading_agendas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meeting_documents');
    }
}
