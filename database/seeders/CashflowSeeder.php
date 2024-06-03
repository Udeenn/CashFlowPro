<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\M_Cashflow;

class CashflowSeeder extends Seeder
{
    public function run()
    {
        M_Cashflow::factory()->count(1000)->create();
    }
}