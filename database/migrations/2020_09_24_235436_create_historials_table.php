<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historials', function (Blueprint $table) {
            $table->id();
            $table->integer('paciente_id')->unsigned();
            $table->integer('control_id')->unsigned();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->foreign('control_id')->references('id')->on('controls');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historials');
    }
}
