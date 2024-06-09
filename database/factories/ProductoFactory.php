<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /*
    *   The name of 
    *   @var string
    */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(),
            'genero' => $this->faker->randomElement(['masculino', 'femenino', 'otro']),
            'visible' => $this->faker->boolean(),
            'temporada' => $this->faker->randomElement(['otoño', 'verano', 'invierno', 'primavera']),
            'imagen' => $this->faker->sentence(),
            'activo' => $this->faker->boolean(),
            'fechaEliminacion' => $this->faker->date(),
            'destacado' => $this->faker->boolean(),
            'novedad' => $this->faker->boolean(),
            'numeroSerie' => $this->faker->sentence()
        ];
    }
}
