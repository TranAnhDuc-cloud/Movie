<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // Đạo diễn
            $table->string('directors');
            // Diễn viên
            $table->string('actor');
            // Thời lượng phim
            $table->integer('time');
            // Năm sản xuất
            $table->date('date');
            // Link poster
            $table->string('url_picture');
            // Link phim
            $table->string('url_link');
            // Số lượt xem
            $table->integer('view');
            // Mô tả phim
            $table->string('description');
            // Trạng thái
            $table->string('status');
            $table->boolean('film_hot');
            $table->unsignedBigInteger('contries_id');
            $table->foreign('contries_id')->references('id')->on('contries')->onDelete('cascade');
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('movies');
    }
}
