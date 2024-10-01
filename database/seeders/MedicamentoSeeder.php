<?php

namespace Database\Seeders;

use App\Models\Medicamentos;
use Illuminate\Database\Seeder;

class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medicamentos::factory()->count(50)->create();
    }
}
