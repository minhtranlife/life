<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDmsanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dmsanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nhomsp')->nullable();
            $table->string('tensp')->nullable();
            $table->text('gioithieusp')->nullable();
            $table->text('tinhnangsp')->nullable();
            $table->text('capnhatsp')->nullable();
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('dmsanpham');
    }
}
