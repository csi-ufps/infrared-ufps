<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCablingCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabling_centers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('location', 100);
            $table->text('observations')->nullable();
            $table->text('image')->nullable();
            $table->unsignedInteger('build_id');
            $table->foreign('build_id')->references('id')->on('builds');
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
        Schema::dropIfExists('cabling_centers');
    }
}
