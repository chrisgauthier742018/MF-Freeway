<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('coffee', function (Blueprint $table) {
            $table->id();
            $table->increments('id');
            $table->timestamps();
            $table->string('coffeename');
            $table->integer('caffvalue');
            $table->integer('serving');
        });

        //I couldn't get this working
        /*
        DB::table('coffee')->insert([
            ['monsterultrasunrise' => '75', '2'],
            ['blackcoffee' => '95', '1'],
            ['americano' => '77', '1'],
            ['sugarfreenos' => '130', '2'],
            ['5hourenergy' => '200', '1'],
        ]);
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coffee');
    }
}
