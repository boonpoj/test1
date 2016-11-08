<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('name',150);
            $table -> decimal('price',10,2);
            $table -> string('image')->default('nopic.jpg');
            $table -> integer('typefood_id')->unsigned();
            $table -> foreign('typefood_id')->references('id')->on('typefood');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('foods');
    }
}
