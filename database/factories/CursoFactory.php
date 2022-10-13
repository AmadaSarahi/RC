<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
Use App\Models\Curso;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    protected $model=Curso::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    

    public function definition()
    {
        $name = $this->faker->sentence();

        return [
            //'name'=> $this->faker->sentence(),
            //'slug'=> Str::slug('Hola mundo','-'), //hola-mundo
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'descripcion'=> $this->faker->paragraph(),
            'categoria'=> $this->faker->randomElement(['Desarrollo web','Diseño Web'])
        ];
        
    }
}
