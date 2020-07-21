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
            
            $table->increments('MD_id');
            $table->string('MD_No');
            $table->string('MD_Details');
              $table->string('MD_subject');
             $table->string('MD_Resolution');
             $table->string('MA_id');
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
        Schema::dropIfExists('meeting_documents');
    }
}
