<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovenantUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covenant_user', function (Blueprint $table) {
            $table->id();
            //datos basicos
            $table->integer('dues');
            $table->integer('paid_dues');
            $table->integer('value');
            //llaves foraneas
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('covenant_id')->references('id')->on('covenants');
            //
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
        Schema::dropIfExists('covenant_user');
    }
}
