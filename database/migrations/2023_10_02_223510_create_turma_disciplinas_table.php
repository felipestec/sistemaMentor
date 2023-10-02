<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turma_disciplinas', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('turma_id')->unsigned();
            $table->foreign('turma_id')->references('id')->on('turmas');

            $table->bigInteger('disciplina_id')->unsigned();
            $table->foreign('disciplina_id')->references('id')->on('disciplinas');

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
        Schema::dropIfExists('turma_disciplinas');
    }
};
