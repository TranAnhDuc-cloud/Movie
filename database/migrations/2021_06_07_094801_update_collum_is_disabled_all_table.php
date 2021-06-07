<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCollumIsDisabledAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            //
            $table->softDeletes(); // add

        });
        Schema::table('categories', function (Blueprint $table) {
            //
            $table->softDeletes(); // add

        });
        Schema::table('contries', function (Blueprint $table) {
            //
            $table->softDeletes(); // add

        });
        Schema::table('single_movies', function (Blueprint $table) {
            //
            $table->softDeletes(); // add

        });
        Schema::table('series_movies', function (Blueprint $table) {
            //
            $table->softDeletes(); // add

        });
        Schema::table('theater_movies', function (Blueprint $table) {
            //
            $table->softDeletes(); // add

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            //
            $table->dropSoftDeletes();
        });
        Schema::table('categories', function (Blueprint $table) {
            //
            $table->dropSoftDeletes();

        });
        Schema::table('contries', function (Blueprint $table) {
            //
            $table->dropSoftDeletes();
        });
        Schema::table('single_movies', function (Blueprint $table) {
            //
            $table->dropSoftDeletes();
        });
        Schema::table('series_movies', function (Blueprint $table) {
            //
            $table->dropSoftDeletes();
        });
        Schema::table('theater_movies', function (Blueprint $table) {
            //
            $table->dropSoftDeletes();
        });
    }
}
