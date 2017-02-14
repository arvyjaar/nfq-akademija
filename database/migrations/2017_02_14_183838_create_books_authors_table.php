<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_book', function (Blueprint $table) {
            $table->integer('author_id')->unsigned()->nullable();
            $table->foreign('author_id', 'fk_p_5_6_book_author')->references('id')->on('authors');
            $table->integer('book_id')->unsigned()->nullable();
            $table->foreign('book_id', 'fk_p_6_5_author_book')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author_book');
    }
}
