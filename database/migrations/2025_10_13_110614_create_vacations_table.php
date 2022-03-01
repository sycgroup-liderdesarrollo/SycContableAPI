<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacationsTable extends Migration
{
    public function up()
    {
        Schema::create('vacations', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('total_days');
            $table->integer('days_apart')->nullable();
            //llave foranea
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();

        });
    }
    public function down()
    {
        Schema::dropIfExists('vacations');
    }
}
