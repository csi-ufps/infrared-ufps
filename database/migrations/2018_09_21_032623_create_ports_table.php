<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ports', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type_logic', ['TRONCAL','NORMAL']);
            $table->unsignedInteger('type_physical_id');
            $table->foreign('type_physical_id')->references('id')->on('type_physical_ports');
            $table->unsignedInteger('equipment_start_id');
            $table->foreign('equipment_start_id')->references('id')->on('equipments');
            $table->unsignedInteger('equipment_end_id');
            $table->foreign('equipment_end_id')->references('id')->on('equipments');
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
        Schema::dropIfExists('ports');
    }
}
