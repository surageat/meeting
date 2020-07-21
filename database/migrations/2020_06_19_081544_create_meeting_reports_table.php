<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_reports', function (Blueprint $table) {
            
            $table->increments('MRP_id');
                 $table->string('MRP_heading');
       $table->string('MRP_date');
      $table->string('MRP_Report');
      $table->string('Meet_id');

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
        Schema::dropIfExists('meeting_reports');
    }
}
