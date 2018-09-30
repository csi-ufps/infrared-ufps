<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortsVlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ports_vlans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150);
            $table->string('number',25);
            $table->unsignedInteger('port_id');
            $table->foreign('port_id')->references('id')->on('ports');
            $table->unsignedInteger('vlan_id');
            $table->foreign('vlan_id')->references('id')->on('vlans');
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
        Schema::dropIfExists('vlans');
    }
}
