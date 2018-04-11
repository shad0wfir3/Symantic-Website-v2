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
            $table->string('name');
            $table->string('icon');
            $table->text('short_description');
            $table->longText('content');
            $table->string('featured_img');
            $table->string('featured_img_alt')->nullable();
            $table->string('page_img');
            $table->string('page_img_alt')->nullable();
            $table->enum('request_type',['contact','quote']);
            $table->string('slug');
            $table->json('breakdown_services');
            $table->enum('status',['published','draft']);
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
