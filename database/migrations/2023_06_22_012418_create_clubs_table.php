<?php
// database/migrations/YYYY_MM_DD_HHmmss_create_clubs_table.php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubsTable extends Migration
{
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->string('kota');
            $table->integer('menang')->default(0);
            $table->integer('seri')->default(0);
            $table->integer('kalah')->default(0);
            $table->integer('goal_menang')->default(0);
            $table->integer('goal_kalah')->default(0);
            $table->integer('point')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clubs');
    }
}
