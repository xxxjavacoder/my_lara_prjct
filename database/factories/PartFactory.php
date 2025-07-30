<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Part>
 */
class PartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brands = ['Bosch', 'Mann', 'Mahle', 'Sachs', 'NGK', 'Delphi'];
        $parts = ['Гальмівні колодки', 'Масляний фільтр', 'Повітряний фільтр', 'Амортизатор', 'Свічка запалювання', 'Ремінь ГРМ'];

        return [
            'name' => $this->faker->randomElement($parts),
            'brand' => $this->faker->randomElement($brands),
            'description' => $this->faker->paragraphs(3, true),
            'article' => strtoupper($this->faker->bothify('??#####')),
            'price' => $this->faker->randomFloat(2, 100, 3000),
            'currency' => 'UAH',
            'count' => $this->faker->randomFloat(0, 0, 20)
        ];
    }
}
