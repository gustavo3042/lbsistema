<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;// poner estos datos para el faker
use Illuminate\Support\Facades\Str; //poner estos datos para el faker
use Faker\Factory as Faker; //poner estos datos en el faker

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      $faker = Faker::create();

    foreach (range(1,10) as $value ) {

      DB::table('categorias')->insert(['descripcion' =>$faker->name,'estado'=>'1']);

    }
    }
}
