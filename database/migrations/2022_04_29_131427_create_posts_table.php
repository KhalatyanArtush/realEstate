<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('title');
            $table->string('agent');
            $table->integer('sum');
            $table->string('buy_rent');
            $table->string('country');
            $table->string('region');
            $table->string('type');
            $table->string('building_type');
            $table->integer('floor');
            $table->integer('room');
            $table->string('swimming');
            $table->text('informations');
            $table->string('lat');
            $table->string('long');
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
        Schema::dropIfExists('posts');
    }
}
