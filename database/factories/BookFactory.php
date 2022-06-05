<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kode_buku' => $this->faker->numerify('book-###'),
            'judul' => $this->faker->sentence(3),
            'penulis' => $this->faker->name(),
            'penerbit' => $this->faker->company()
        ];
    }
}
