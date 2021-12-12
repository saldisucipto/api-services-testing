<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterMountainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_mountains', function (Blueprint $table) {
            $table->id();
            $table->string('name', 110);
            $table->text('description');
            $table->float('price', 9, 2);
            $table->tinyInteger('starts');
            $table->tinyInteger('people');
            $table->integer('selected_people');
            $table->string('img');
            $table->string('location');
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
        Schema::dropIfExists('master_mountains');
    }
}
