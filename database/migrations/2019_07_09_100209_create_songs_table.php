<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->string("slug")->unique();
            $table->text("path");
            $table->integer("album_id");
            $table->integer("artist_id");
            $table->integer("type_id");
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('album_id')->references('id')->on('albums');
            $table->foreign('artist_id')->references('id')->on('artists');
            $table->foreign('type_id')->references('id')->on('song_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
