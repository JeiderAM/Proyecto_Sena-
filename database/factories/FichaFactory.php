<?php

namespace Database\Factories;

use App\Models\Ficha;
use App\Models\Centro;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FichaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ficha::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            //

            'fecha' => $this->faker->date(),
            'nombre_elemento' => $this->faker->unique()->sentence(),
            'codigo' => $this->faker->unique()->randomDigit(),
            'valor_estimado' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'condiciones' => $this->faker->sentence(),
            'accesorios' => $this->faker->sentence(),
            'estado' => $this->faker->randomElement([1, 2]),
            
            'centro_id' => Centro::all()->random()->id,
            'user_id' => User::all()->random()->id



            
        ];
    }
}
