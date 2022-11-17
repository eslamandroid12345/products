<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{

    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->text('advertisement');
            $table->boolean('status')->default(1)->comment('0 is hide and 1 is show');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
