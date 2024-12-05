<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Confrence>
 */
class ConfrenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'text' => fake()->realText(500),
            'date' =>fake()->date(),
            'adress' => fake()->address(),
            'participant_number' => fake()->numberBetween(1, 100)
        ];
    }
}
//$table->id();
//$table->timestamps();
//$table->string('title'); // Antraštė
//$table->text('text');   // Aprašas
//$table->date('date'); // Konferencijos data
//$table->string('adress'); // Adresas
//$table->integer('participant_number');
