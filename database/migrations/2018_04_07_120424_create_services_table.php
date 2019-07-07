<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('featured_img');
            $table->string('featured_img_alt')->nullable();
            $table->string('header_intro')->nullable();
            $table->text('header_description')->nullable();
            $table->boolean('video_display')->default(1);
            $table->string('video_link')->nullable();
            $table->string('video_image')->nullable();
            $table->longText('sub_services')->nullable();
            $table->string('cta_image')->nullable();
            $table->longText('cta_skills')->nullable();
            $table->string('cta_pre_title')->nullable();
            $table->string('cta_title')->nullable();
            $table->string('cta_subtext')->nullable();
            $table->string('quote_text')->nullable();
            $table->string('quote_description')->nullable();
            $table->string('quote_link')->nullable();
            $table->string('featured_icon');
            $table->boolean('published')->nullable();
            $table->dateTime('published_date')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('services');
    }
}
