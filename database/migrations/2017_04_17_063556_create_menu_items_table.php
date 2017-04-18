<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
     Schema::create('food', function (Blueprint $table) {
        $table->increments('id');
        $table->string('rest_name');
        $table->string('item');
        $table->string('description');
        $table->string('price');
 

 


           
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
         Schema::dropIfExists('food');
    }
}
