<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvisionsTable extends Migration
{
    public function up()
    {
        Schema::create('provisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('period_id')->references('id')->on('periods');
            $table->integer('pension_contribution')->nullable();
            $table->integer('occupational_risk_contributions')->nullable();
            $table->integer('health_contribution')->nullable();
            $table->integer('compensation_funds')->nullable();
            $table->integer('layoffs')->nullable();
            $table->integer('Interest_on_severance_pay')->nullable();
            $table->integer('vacation_provision')->nullable();
            $table->integer('wage_premium')->nullable();
            $table->integer('total_provisions')->nullable();
            $table->integer('total_payroll')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('provisions');
    }
}
