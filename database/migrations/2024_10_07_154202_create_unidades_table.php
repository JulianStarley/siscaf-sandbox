<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_unidade_id');
            $table->string('unidade');
            $table->string('modulo');
            $table->tinyText('ativo');
            $table->longText('observacao');
            $table->decimal('populacao_adstrita', 10, 2);
            $table->decimal('distancia_caf', 10, 2);
            $table->decimal('distancia_referencia_modulo', 10, 2);
            $table->string('funcionario_responsavel');
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
        Schema::dropIfExists('unidades');
    }
}
