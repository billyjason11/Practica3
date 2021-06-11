<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Billy Vargas',
            'email' => 'billy@exosfera.com',
            'password' => bcrypt('123123123'),
            'tipo_usuario'=>('1'),
        ]); 
        DB::table('users')->insert([
            'name'=>'Diegaly Prieto',
            'email'=> 'diegaly@exosfera.com',
            'password'=> bcrypt('321321321'),
            'tipo_usuario'=>('0'),
        ]);
        DB::table('users')->insert([
            'name'=>'Lizbeth Marquez',
            'email'=> 'lizbeth@exosfera.com',
            'password'=> bcrypt('123123123  '),
            'tipo_usuario'=>('0'),
        ]);
    }
}