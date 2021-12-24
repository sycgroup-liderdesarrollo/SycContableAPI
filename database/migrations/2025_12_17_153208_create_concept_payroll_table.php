<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConceptPayrollTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concept_payroll', function (Blueprint $table) {
            $table->id();
            //datos basicos
            $table->integer('count');
            $table->integer('unit_value');
            $table->integer('total_value');
            //llave foraneas
            $table->foreignId('concept_id')->references('id')->on('concepts');
            $table->foreignId('payroll_id')->references('id')->on('payrolls');
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
        Schema::dropIfExists('concept_payroll');
    }
}
