<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->timestamp('published_date');
            $table->integer('user_id');
            $table->string('title');
            $table->text('entry');
            $table->text('tags');
            $table->longText('wordcloud');
            $table->json('images');
            $table->boolean('public');
            $table->integer('likes')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entries');
    }
}
