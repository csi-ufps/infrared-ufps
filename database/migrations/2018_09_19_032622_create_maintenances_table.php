<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_in');
            $table->string('made_by',200);
            $table->enum('type_maintenance', ['Mantenimiento Preventivo','Mantenimiento Correctivo']);
            $table->text('action_performed')->nullable();
            $table->text('observations')->nullable();
            $table->text('evidence_image')->nullable();
            $table->unsignedInteger('equipment_id');
            $table->foreign('equipment_id')->references('id')->on('equipments');
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
        Schema::dropIfExists('maintenances');
    }
}
