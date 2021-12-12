<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string("applicantId");
            $table->foreignId("user_id")->onDelete('cascade');
            $table->string("firstname")->nullable();
            $table->string("lastname")->nullable();
            $table->longText("bio")->nullable();
            $table->string("title")->nullable();
            $table->integer("price_per_hour")->nullable();
            $table->string("country")->nullable();
            $table->string("image")->nullable();
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
        Schema::dropIfExists('applicants');
    }
}
