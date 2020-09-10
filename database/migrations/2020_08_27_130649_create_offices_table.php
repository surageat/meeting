<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('OF_user');
            $table->string('OF_pass');
            $table->string('OF_name');
            $table->string('OF_lname');
            $table->string('OF_rank');
            $table->string('OF_department');
            $table->string('OF_institution');
            $table->string('OF_tel');
            $table->string('OF_email')->uniqid();
            $table->string('OF_status');
            $table->rememberToken();
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
        Schema::dropIfExists('offices');
    }
}
