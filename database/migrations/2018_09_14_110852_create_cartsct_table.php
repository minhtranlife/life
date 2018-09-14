<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsctTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartsct', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ipguest')->nullable();
            $table->string('madh')->nullable();
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
        Schema::dropIfExists('cartsct');
    }
}
