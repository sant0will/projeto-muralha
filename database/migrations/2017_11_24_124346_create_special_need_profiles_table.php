<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialNeedProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_need_profiles', function (Blueprint $table) {
            $table->integer('profile_id')->unsigned();
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->integer('special_need_id')->unsigned();
            $table->foreign('special_need_id')->references('id')->on('special_needs');
            $table->tinyInteger('permanente', 100);
            $table->string('observacao', 500)->nullable();
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
        Schema::dropIfExists('special_nedd_profiles');
    }
}
