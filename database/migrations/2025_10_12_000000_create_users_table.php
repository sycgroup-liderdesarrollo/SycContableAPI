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
            //llaves foraneas
            $table->foreignId('position_id')->references('id')->on('positions');
            $table->foreignId('business_line_id')->references('id')->on('business_lines');
            $table->foreignId('contract_type_id')->references('id')->on('contract_types');
            $table->foreignId('salary_type_id')->references('id')->on('salary_types');
            $table->foreignId('headquarter_id')->references('id')->on('headquarters');
            $table->foreignId('identification_type_id')->references('id')->on('identification_types');
            //
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
