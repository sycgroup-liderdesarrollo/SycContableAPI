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
            $table->boolean('active')->default(true);
            $table->integer('value')->nullable();
            //llaves foraneas
            $table->foreignId('covenant_type_id')->references('id')->on('covenant_types');
            $table->foreignId('periodicity_type_id')->references('id')->on('periodicity_types');
            $table->unsignedBigInteger('concept_id')->nullable();
            $table->foreign('concept_id')->references('id')->on('concepts')->onDelete('set null');
            $table->foreignId('provider_id')->references('id')->on('providers');
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
