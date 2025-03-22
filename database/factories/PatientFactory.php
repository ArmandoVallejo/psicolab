<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Patient;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * El modelo asociado con este factory.
     */
    protected $model = Patient::class;

    /**
     * Define el estado por defecto del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->unique()->numerify('##########'), // 10 dígitos numéricos
            'birth_date' => fake()->dateTimeBetween('-80 years', '-18 years')->format('Y-m-d'), // Edad entre 18 y 80 años
            'sex' => fake()->randomElement(['Male', 'Female']),
            'genre' => fake()->word(),
            'reason_for_visit' => fake()->sentence()
        ];
    }
}
