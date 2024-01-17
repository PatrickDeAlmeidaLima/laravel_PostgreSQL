<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Faker\Factory as Faker;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        Usuario::truncate();

        $faker = Faker::create();
        // informacoes aleatorias
        for ($i = 0; $i < 10; $i++) {
            Usuario::create([
                'nome' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'senha' => bcrypt('123123123'),
            ]);
        }
    }
}
