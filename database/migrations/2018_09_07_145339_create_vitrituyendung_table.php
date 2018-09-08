<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVitrituyendungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitrituyendung', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vitri')->nullable();
            $table->string('soluong')->nullable();
            $table->string('hannophs')->nullable();
            $table->text('mota')->nullable();
            $table->text('yeucau')->nullable();
            $table->text('quyenloi')->nullable();
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
        //
    }
}
