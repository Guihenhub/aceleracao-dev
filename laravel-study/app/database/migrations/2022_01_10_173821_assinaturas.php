<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Assinaturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('assinaturas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('qtdCaracteres');
            $table->string('AssinaturaPadrao');
            $table->integer('qtdAssinaturas');
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
