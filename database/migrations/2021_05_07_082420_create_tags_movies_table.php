<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags_movies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tags_id');
            $table->unsignedBigInteger('movies_id');
            $table->foreign('tags_id')->references('id')->on('tags')->onDelete('cascade');
            $table->foreign('movies_id')->references('id')->on('movies')->onDelete('cascade');
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
        Schema::dropIfExists('tags_movies');
    }
}
