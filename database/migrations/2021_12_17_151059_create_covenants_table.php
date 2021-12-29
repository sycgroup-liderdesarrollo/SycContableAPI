<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covenants', function (Blueprint $table) {
            $table->id();
            //datos basicos
            $table->string('name');
            $table->boolean('active');
            $table->integer('value');
            //llaves foraneas
            $table->foreignId('covenant_type_id')->references('id')->on('covenant_types');
            $table->foreignId('periodicity_type_id')->references('id')->on('periodicity_types');
            $table->foreignId('concept_id')->references('id')->on('concepts');
            //
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('covenants');
    }
}
