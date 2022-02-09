<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccupationalRiskManagersTable extends Migration
{
    public function up()
    {
        Schema::create('occupational_risk_managers', function (Blueprint $table) {
            $table->id();
            $table->string('class');
            $table->string('name');
            $table->double('porcentage');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('occupational_risk_managers');
    }
}
