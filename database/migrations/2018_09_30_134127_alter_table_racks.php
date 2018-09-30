<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableRacks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('racks', function (Blueprint $table) {
            $table->foreign('cabling_center_id')->references('id')->on('cabling_centers')->onDelete('cascade')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('racks', function (Blueprint $table) {
            $table->foreign('cabling_center_id')->references('id')->on('cabling_centers')->change();
        });
    }
}
