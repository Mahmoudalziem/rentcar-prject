<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    use SoftDeletes;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id()->unique();
            $table->string('title')->nullable()->default('fci')->unique();
            $table->boolean('status')->nullable()->default(1);
            $table->string('location')->nullable()->default('zagazig');
            $table->integer('price')->nullable()->default('20');
            $table->string('latitude')->nullable()->default('332423');
            $table->string('longitude')->nullable()->default('345623');
            $table->integer('sqft')->nullable()->default('80');
            $table->integer('seller')->unsigned();
            // $table->foreign('seller')->references('id')->on('sellers');
            $table->string('property')->nullable()->default('villa');
            $table->string('type')->nullable()->default('bmw');
            $table->string('color')->nullable()->default('black');
            $table->text('descri')->nullable()->default('Hello In My Villa');
            $table->string('promo')->nullable()->default('https://www.youtube.com');
            $table->string('unique_id')->nullable()->default('azima')->unique();
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
        Schema::dropIfExists('cars');
    }
}
