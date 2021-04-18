<?php

namespace Database\Factories;

use App\Models\Centro;
use Illuminate\Database\Eloquent\Factories\Factory;

class CentroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Centro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name = $this->faker->unique()->word(20);

        return [
            //
            'nombre' => $name,
            'descripcion' => $this->faker->sentence(),
            'direccion' => $this->faker->sentence()
        ];
    }
}
