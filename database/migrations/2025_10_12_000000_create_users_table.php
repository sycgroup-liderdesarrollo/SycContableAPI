<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            //datos basicos
            $table->string('name');
            $table->string('last_name');
            $table->string('second_last_name')->nullable();
            $table->string('identification_number')->unique();
            $table->date('admission_date');
            $table->date('out_date')->nullable();
            $table->integer('base_salary');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('active')->default(true);
            $table->string('address');
            $table->string('neighborhood');
            $table->date('birthday');
            $table->integer('children');
            $table->double('phone');
            //llaves foraneas
            $table->foreignId('position_id')->references('id')->on('positions');
            $table->foreignId('contract_type_id')->references('id')->on('contract_types');
            $table->foreignId('salary_type_id')->references('id')->on('salary_types');
            $table->foreignId('headquarter_id')->references('id')->on('headquarters');
            $table->foreignId('identification_type_id')->references('id')->on('identification_types');
            $table->foreignId('gender_id')->references('id')->on('genders');
            $table->foreignId('health_provider_id')->references('id')->on('health_providers');
            $table->foreignId('pension_fund_id')->references('id')->on('pension_funds');
            $table->foreignId('civil_status_id')->references('id')->on('civil_statuses');
            $table->foreignId('work_city_id')->references('id')->on('cities');
            $table->foreignId('residence_city_id')->references('id')->on('cities');
            $table->foreignId('expedition_place_id')->references('id')->on('cities');
            $table->foreignId('strata_id')->references('id')->on('stratas');
            $table->foreignId('education_level_id')->references('id')->on('education_levels');
            $table->foreignId('emergency_contact_id')->references('id')->on('emergency_contacts');
            $table->foreignId('occupational_risk_manager_id')->references('id')->on('occupational_risk_managers');
            //
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
