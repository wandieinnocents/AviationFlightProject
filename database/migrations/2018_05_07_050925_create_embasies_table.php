<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmbasiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embasies', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->string('contact')->nullable();
            $table->string('contact_two')->nullable();
            
            $table->string('image');
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
        Schema::drop('embasies');
    }
}
