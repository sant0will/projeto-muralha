<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 200);
            $table->date('data_nascimento');
            $table->string('rg', 15);
            $table->string('emissor_rg', 15);
            $table->string('cpf', 15);
            $table->string('sexo', 45);
            $table->string('nome_pai', 200);
            $table->string('nome_mae', 200);
            $table->string('passaporte', 50);
            $table->string('naturalidade', 50);
            $table->string('telfone', 45);
            $table->string('celular', 45);
            $table->string('escolaridade', 45);
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
        Schema::dropIfExists('profiles');
    }
}
