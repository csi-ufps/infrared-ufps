<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('racks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('dimensions', 100);
            $table->string('reference', 45);
            $table->string('mark', 45);
            $table->text('observations')->nullable();
            $table->text('image')->nullable();
            $table->unsignedInteger('cabling_center_id');
            $table->foreign('cabling_center_id')->references('id')->on('cabling_centers');
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
        Schema::dropIfExists('racks');
    }
}
