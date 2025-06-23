<?php

namespace Database\Factories;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BarangKeluar>
 */
class BarangKeluarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'total'=>fake()->numberBetween(1,10),
            'tanggal'=>fake()->date(),
            'barang_id'=>Barang::inRandomOrder()->first()->id,
            'user_id'=>User::inRandomOrder()->first()->id
        ];
    }
}
