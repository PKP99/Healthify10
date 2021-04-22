<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userd', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Email',50);
            $table->float('Weight', 8, 5);
            $table->float('Height', 8, 5);
            $table->date('DOB');
            $table->string('Gender',10);
            $table->float('BMR', 10, 5);
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
        Schema::dropIfExists('userd');
    }
}
