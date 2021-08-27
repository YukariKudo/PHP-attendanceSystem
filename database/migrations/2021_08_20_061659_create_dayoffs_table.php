<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDayoffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dayoffs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('start'); 
            $table->dateTime('end'); 
            $table->string('user_id');
            $table->string('type');
            $table->string('memo');
            $table->integer('is_checked')->default(0);
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
        Schema::dropIfExists('dayoffs');
    }
}
