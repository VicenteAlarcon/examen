<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo = new Type();
        $tipo->name = "Administrador";
        $tipo->colour = $faker->hexColor();;
        $tipo->model = "App\Models\User";
        $tipo->save();
        
        $tipo = new Type();
        $tipo->name = "Gestor";
        $tipo->colour = $faker->hexColor();;
        $tipo->model = "App\Models\User";
        $tipo->save();

        $tipo = new Type();
        $tipo->name = "Empleado";
        $tipo->colour = $faker->hexColor();;
        $tipo->model = "App\Models\User";
        $tipo->save();

        $tipo = new Type();
        $tipo->name = "En curso";
        $tipo->colour = $faker->hexColor();;
        $tipo->model = "App\Models\Task";
        $tipo->save();


        $tipo = new Type();
        $tipo->name = "Pendiente";
        $tipo->colour = $faker->hexColor();;
        $tipo->model = "App\Models\Task";
        $tipo->save();


        $tipo = new Type();
        $tipo->name = "En espera";
        $tipo->colour = $faker->hexColor();;
        $tipo->model = "App\Models\Task";
        $tipo->save();


        $tipo = new Type();
        $tipo->name = "Algun día";
        $tipo->colour = $faker->hexColor();;
        $tipo->model = "App\Models\Task";
        $tipo->save();
}
}