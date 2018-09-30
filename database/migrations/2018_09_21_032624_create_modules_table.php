<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150);
            $table->string('serial',150);
            $table->string('reference',150);
            $table->string('capacity',150);
            $table->enum('type_physical',['RJ45','LC']);
            $table->unsignedInteger('port_id');
            $table->foreign('port_id')->references('id')->on('ports');
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
        Schema::dropIfExists('modules');
    }
}
