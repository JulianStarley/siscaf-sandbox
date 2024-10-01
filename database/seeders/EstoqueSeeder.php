<?php

namespace Database\Seeders;

use App\Models\Estoques;
use Illuminate\Database\Seeder;

class EstoqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estoques::factory()->count(50)->create();
    }
}
