<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('profile_id')->unsigned();
            $table->foreign('profile_id')->references('id')->on('profiles');            
            $table->integer('processo_seletivo_id')->unsigned();
            $table->foreign('processo_seletivo_id')->references('id')->on('selective_processes');
            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('courses');                       
            $table->integer('cota_id')->unsigned();
            $table->foreign('cota_id')->references('id')->on('quotas');
            $table->date('data_inscricao');
            $table->date('data_pagamento')->nullable();
            $table->tinyInteger('pago')->nullable();
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
        Schema::dropIfExists('subscriptions');
    }
}
