<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumoItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumos_itens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medicamento_id');
            $table->foreignId('consumos_id');
            $table->decimal('quantidade_consumida', 8 ,2);
            $table->integer('user_exclusao_id');
            $table->tinyText('excluido');
            $table->timestamp('data_exclusao');
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
        Schema::dropIfExists('consumo_items');
    }
}
