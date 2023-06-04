<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('annonces')->insert([
  
            'titre'=>'villa de reve',
            'description'=>'lorem',
            'type'=>'villa',
            'ville'=>'fes',
            'superficie'=>'idk',
            'neuf'=>true,
            'prix'=>10.34,
        ]);
    }
}
