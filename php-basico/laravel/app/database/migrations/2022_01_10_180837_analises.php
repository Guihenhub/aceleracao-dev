<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Analises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('analises', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_doc');
            $table->integer('id_assinatura');
            $table->string('status');
            $table->timestamp('data_analise');
            $table->integer('visualizadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql')->dropIfExists('assinaturas');
    }
}
