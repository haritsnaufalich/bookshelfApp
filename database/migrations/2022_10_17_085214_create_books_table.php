<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('genre_id');
            $table->foreignId('author_id');
            $table->string('title');
            $table->text('description');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('year')->default(mt_rand(1900, 2021));
            $table->integer('pages')->default(mt_rand(200, 500));
            $table->integer('progress')->default(0);
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
        Schema::dropIfExists('books');
    }
};
