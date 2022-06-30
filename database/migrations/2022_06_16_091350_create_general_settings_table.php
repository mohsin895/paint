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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_logo')->nullable();
            $table->string('admin_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('website_name')->nullable();
            $table->string('site_title')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('fb')->nullable();
            $table->string('lin')->nullable();
            $table->string('insta')->nullable();
            $table->string('youtube')->nullable();
            $table->string('twiter')->nullable();
            $table->longtext('privecy_policy')->nullable();
            $table->longtext('legal_notice')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
};
