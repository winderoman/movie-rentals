<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('movie_image');
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->integer('points_rental')->default(0);
            $table->integer('points_required')->default(0);
            $table->integer('stock')->default(0);
            $table->string('category')->nullable();
            $table->integer('status_movie')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
