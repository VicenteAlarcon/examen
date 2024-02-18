<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Faker\Factory as Faker;
class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  
       //inicializamos faker

       $faker = Faker\Factory::create();

        $tipo = new Type();
        $tipo->name = "Administrador";
       
        $tipo->model = "App\Models\User";
        $tipo->save();
        
        $tipo = new Type();
        $tipo->name = "Gestor";
        
        $tipo->model = "App\Models\User";
        $tipo->save();

        $tipo = new Type();
        $tipo->name = "Empleado";
      
        $tipo->model = "App\Models\User";
        $tipo->save();

        $tipo = new Type();
        $tipo->name = "En curso";
     
        $tipo->model = "App\Models\Task";
        $tipo->save();


        $tipo = new Type();
        $tipo->name = "Pendiente";
   
        $tipo->model = "App\Models\Task";
        $tipo->save();


        $tipo = new Type();
        $tipo->name = "En espera";
      
        $tipo->model = "App\Models\Task";
        $tipo->save();


        $tipo = new Type();
        $tipo->name = "Algun día";
       
        $tipo->model = "App\Models\Task";
        $tipo->save();
}
}