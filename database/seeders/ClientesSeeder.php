<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;// poner estos datos para el faker
use Illuminate\Support\Facades\Str; //poner estos datos para el faker
use Faker\Factory as Faker; //poner estos datos en el faker

class ClientesSeeder extends Seeder
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

      DB::table('clientes')->insert(['Nombre' =>$faker->name,'Apellido'=>$faker->lastname,'Telefono'=>'35450163','comuna'=>$faker->city,'estado'=>'1']);

    }



    }
}
