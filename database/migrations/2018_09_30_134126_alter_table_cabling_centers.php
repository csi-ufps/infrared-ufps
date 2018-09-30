<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableCablingCenters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cabling_centers', function (Blueprint $table) {
            $table->foreign('build_id')->references('id')->on('builds')->onDelete('cascade')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cabling_centers', function (Blueprint $table) {
            $table->foreign('build_id')->references('id')->on('builds')->change();
        });
    }
}
