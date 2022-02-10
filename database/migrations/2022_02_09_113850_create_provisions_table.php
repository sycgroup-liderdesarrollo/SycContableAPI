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
            $table->double('pension_contribution')->nullable();
            $table->double('occupational_risk_contributions')->nullable();
            $table->double('health_contribution')->nullable();
            $table->double('compensation_funds')->nullable();
            $table->double('layoffs')->nullable();
            $table->double('Interest_on_severance_pay')->nullable();
            $table->double('vacation_provision')->nullable();
            $table->double('wage_premium')->nullable();
            $table->double('total_provisions')->nullable();
            $table->double('total_payroll')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('provisions');
    }
}
