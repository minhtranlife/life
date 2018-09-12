<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsctdfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartsctdf', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ipguest')->nullable();
            $table->string('idsp')->nullable();
            $table->string('nhomsp')->nullable();
            $table->string('tensp')->nullable();
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
        Schema::dropIfExists('cartsctdf');
    }
}
