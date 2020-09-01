<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->string('file_number');
            $table->string('job_ar');
            $table->string('job_en');
            $table->string('nationality_ar');
            $table->string('nationality_en');
            $table->string('religion_ar');
            $table->string('religion_en');
            $table->string('age');
            $table->string('expertise')->nullable();
            $table->string('social_status_ar');
            $table->string('social_status_en');
            $table->string('children');
            $table->string('home_business');
            $table->string('cooking');
            $table->string('elderly');
            $table->string('gardens');
            $table->string('education');
            $table->string('university');
            $table->string('appearance');
            $table->string('face');
            $table->string('english');
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
        Schema::dropIfExists('cvs');
    }
}
