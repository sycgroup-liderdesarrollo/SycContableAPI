<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            //datos basicos
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('trade_name');
            $table->string('address');
            $table->string('phone');
            $table->string('identification_number');
            $table->boolean('iva');
            $table->string('email')->unique();
            $table->string('password');
            //llave foranea
            $table->foreignId('identification_type_id')->references('id')->on('identification_types');
            $table->foreignId('constitution_type_id')->references('id')->on('constitution_types');
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->unsignedBigInteger('responsability_type_id')->nullable();
            $table->foreign('responsability_type_id')->references('id')->on('responsability_types');
            //
            $table->timestamps();
            $table->softDeletes();

        });
    }

    public function down()
    {
        Schema::dropIfExists('providers');
    }
}
