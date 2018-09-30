<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mark', 100);
            $table->string('serial', 100);
            $table->string('model', 100);
            $table->string('reference', 100);
            $table->string('name_system', 100)->nullable();
            $table->string('contact', 100)->nullable();
            $table->string('version_os', 100)->nullable();
            $table->string('version_image_os', 100)->nullable();
            $table->string('code_inventory', 100);
            $table->string('mac', 100)->nullable();
            $table->string('gateway', 100)->nullable();
            $table->string('ip', 100)->nullable();
            $table->string('management_ip', 100)->nullable();
            $table->text('observations')->nullable();
            $table->text('image')->nullable();
            $table->text('image_serial')->nullable();
            $table->text('file_configuration')->nullable();
            $table->text('os')->nullable();
            $table->text('logic_physical_specifications')->nullable();
            $table->string('poe_serial', 100)->nullable();
            $table->string('poe_mark', 100)->nullable();
            $table->string('poe_reference', 100)->nullable();
            $table->text('poe_image_serial')->nullable();
            $table->unsignedInteger('type_equipment_id');
            $table->foreign('type_equipment_id')->references('id')->on('type_equipments');
            $table->unsignedInteger('rack_id');
            $table->foreign('rack_id')->references('id')->on('racks');
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
        Schema::dropIfExists('equipments');
    }
}
