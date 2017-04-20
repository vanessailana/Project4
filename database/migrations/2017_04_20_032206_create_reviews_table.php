<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('review', function (Blueprint $table) {
      $table->increments('id');
        $table->string('rest_name');
        $table->string('useremail');
        $table->integer('ratingvalue');
        $table->string('body');
        $table->string('tagline');
 
          
            $table->timestamps();
        });
    } //


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
