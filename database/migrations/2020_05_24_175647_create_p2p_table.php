<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateP2pTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p2p', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('publication_id')->unsigned();
            $table->foreign('publication_id')->references('id')->on('publications');
            $table->unsignedBigInteger('picture_id')->unsigned();
            $table->foreign('picture_id')->references('id')->on('pictures');
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
        Schema::dropIfExists('p2p');
    }
}
