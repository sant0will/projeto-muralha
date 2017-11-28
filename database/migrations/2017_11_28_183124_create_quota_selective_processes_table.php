<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotaSelectiveProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quota_selective_processes', function (Blueprint $table) {            
            $table->integer('cota_id')->unsigned();
            $table->foreign('cota_id')->references('id')->on('quotas');
            $table->integer('processo_seletivo_id')->unsigned();
            $table->foreign('processo_seletivo_id')->references('id')->on('selective_processes');
            $table->integer('vagas');
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
        Schema::dropIfExists('quota_selective_processes');
    }
}
