<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->text('description');
            $table->integer('status');
            $table->integer('upvote');
            $table->integer('downvote');   
            $table->string('companyName');
            $table->string('gameTitle');

            //TODO verder met CRUD opzetten https://www.techiediaries.com/laravel/php-laravel-7-6-tutorial-crud-example-app-bootstrap-4-mysql-database/
            //TODO vervolgens post en comment en reply eraan toevoegen!  https://www.itsolutionstuff.com/post/laravel-one-to-many-eloquent-relationship-tutorialexample.html 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('features');
    }
}
