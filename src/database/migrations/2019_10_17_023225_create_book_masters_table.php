<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_masters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('author');
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->string('default_color')->nullable();
            $table->string('average_color')->nullable();
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
        Schema::dropIfExists('book_masters');
    }
}
