<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToProductsTable extends Migration
{

    public function up()
    {
        Schema::table('products', function (Blueprint $table) {

            $table->boolean('status')->default(1)->comment('0 is hide and 1 is show');
        });
    }


    public function down()
    {
        Schema::table('products', function (Blueprint $table) {

            $table->dropColumn('status');
        });
    }
}
