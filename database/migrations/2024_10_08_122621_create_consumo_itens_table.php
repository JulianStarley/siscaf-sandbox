<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumoItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumo_itens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('consumos_id')->constrained()->onDelete('cascade');
            $table->foreignId('medicamento_id')->constrained()->onDelete('cascade');
            $table->integer('quantidade_consumida')

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consumo_itens');
    }
}
