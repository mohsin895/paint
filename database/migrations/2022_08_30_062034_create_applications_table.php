<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->text('main_description')->nullable();
            $table->string('application_image1')->nullable();
            $table->string('application_image2')->nullable();
            $table->string('application_image3')->nullable();

            $table->string('application_image4')->nullable();
            $table->string('application_image5')->nullable();
            $table->string('application_image6')->nullable();
            $table->string('application_image7')->nullable();
            $table->string('application_image8')->nullable();
            $table->longText('long_description')->nullable();
            $table->string('slug')->nullable();

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
        Schema::dropIfExists('applications');
    }
};
