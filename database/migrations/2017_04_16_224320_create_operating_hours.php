<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperatingHours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('times', function (Blueprint $table) {
        $table->increments('restu_id');
        $table->string('Monday');
        $table->string('Tuesday');
        $table->string('Wednesday');
        $table->string('Thursday');
        $table->string('Friday');
        $table->string('Saturday');
         $table->string('Sunday');

 


           
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
         Schema::dropIfExists('times');
        //
    }
}
