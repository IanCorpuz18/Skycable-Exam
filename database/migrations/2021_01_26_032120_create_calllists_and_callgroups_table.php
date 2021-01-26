<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalllistsAndCallgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('callgroups', function (Blueprint $table) {
            $table->id();
            $table->string('groupname');
        });
        Schema::create('calllists', function (Blueprint $table) {
            $table->id();
            $table->string('clid');
            $table->string('level');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calllists');
        Schema::dropIfExists('callgroups');
    }
}
