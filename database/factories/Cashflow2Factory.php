<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\M_Cashflow;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\M_Cashflow>
 */
class Cashflow2Factory extends Factory
{
    protected $model = M_Cashflow::class;

       public function definition()
       {
           return [
               'tanggal' => $this->faker->date(),
               'tipe' => $this->faker->randomElement(['pemasukan', 'pengeluaran']),
               'nominal' => $this->faker->numberBetween(100000, 1000000),
               'keterangan' => $this->faker->sentence(),
           ];
       }
}
