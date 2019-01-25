<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareer6sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career6s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('national_id');
            $table->string('facebook_link');
            $table->string('university');
            $table->string('faculty');
            $table->string('department');
            $table->string('academic_year');
            $table->unsignedInteger('session')->nullable();
            $table->unique(['email', 'session']);
            $table->boolean('bus')->default(0);
            $table->foreign('session')->references('id')->on('c_workshops')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('career6s');
    }
}
