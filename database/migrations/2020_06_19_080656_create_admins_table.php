<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('Admin_id');
            $table->string('Admin_name');
            $table->linestring('Admin_position');
            $table->string('Admin_tel');
            $table->string('Admin_instition');
            $table->string('Admin_email')->uniqid();
            $table->string('Admin_user');
            $table->string('Admin_pass');
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
        Schema::dropIfExists('admin');
    }
}
