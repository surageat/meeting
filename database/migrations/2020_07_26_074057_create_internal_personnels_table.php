<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternalPersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internal_personnels', function (Blueprint $table) {
            $table->increments('IP_id');
            $table->string('IP_user');
            $table->string('IP_pass');
            $table->string('IP_name');
            $table->string('IP_lname');
            $table->string('IP_position');
            $table->string('IP_faculty');
            $table->string('IP_department');
            $table->string('IP_institution');
            $table->string('IP_tel');
            $table->string('ip_email')->uniqid();
            
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
        Schema::dropIfExists('internal_personnels');
    }
}
