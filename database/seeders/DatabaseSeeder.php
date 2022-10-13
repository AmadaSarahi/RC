<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\Curso;
Use App\Models\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /*
        $curso = new Curso();
        $curso->name=("laravel");
        $curso->descripcion=("El mejor framework de PHP");
        $curso->categoria=("Desarrollo web");
        $curso->save();
        */

        //$this->call(CursoSeeder::class);
        
        Curso::factory(50)->create();
        //User::factory(10)->create();

    }
}
