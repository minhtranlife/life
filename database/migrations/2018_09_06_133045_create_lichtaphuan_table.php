<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLichtaphuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichtaphuan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('level')->nullable();
            $table->string('diadanh')->nullable();
            $table->text('tungay')->nullable();
            $table->text('denngay')->nullable();
            $table->text('sldv')->nullable();
            $table->text('tensp')->nullable();
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
        //
    }
}
