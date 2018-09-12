<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaContaStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conta_status', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('conta_id')->unsigned();
            $table->foreign('conta_id')->references('id')->on('conta_status')->onDelete('cascade'); 
            $table->string('status');
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
        Schema::dropIfExists('conta_status');
    }
}
