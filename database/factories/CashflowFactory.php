<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\M_Cashflow;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\M_Cashflow>
 */
class CashflowFactory extends Factory
{
    protected $model = M_Cashflow::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'tanggal' => $this->faker->date(),
        'tipe' => $this->faker->randomElement(['pemasukan', 'pengeluaran']),
        'nominal' => $this->faker->randomFloat(2, 10000, 500000),
        'keterangan' => $this->faker->sentence(),
        ];
    }
}
