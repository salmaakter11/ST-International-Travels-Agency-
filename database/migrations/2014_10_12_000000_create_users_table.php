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
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('religion')->nullable();
            $table->string('address')->nullable();
            $table->string('country_id')->nullable();
            $table->string('image')->nullable();
            $table->string('thum_image')->nullable();
            $table->string('educational_one')->nullable();
            $table->string('educational_two')->nullable();
            $table->string('educational_three')->nullable();
            $table->string('institute_one')->nullable();
            $table->string('institute_two')->nullable();
            $table->string('institute_three')->nullable();
            $table->string('department_one')->nullable();
            $table->string('department_two')->nullable();
            $table->string('department_three')->nullable();
            $table->string('passing_year_one')->nullable();
            $table->string('passing_year_two')->nullable();
            $table->string('passing_year_three')->nullable();
            $table->string('grade_one')->nullable();
            $table->string('grade_two')->nullable();
            $table->string('grade_three')->nullable();
            $table->string('result_one')->nullable();
            $table->string('result_two')->nullable();
            $table->string('result_three')->nullable();
            $table->string('language_id')->nullable();
            $table->string('score')->nullable();
            $table->string('test_date')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->tinyInteger('user_type')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
