<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImpactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('impacts')->insert([    
            'description' => 'Contentores de 40 pés',
            'value' => '31',
            'visible' => true
        ]);
        DB::table('impacts')->insert([    
            'description' => 'Escolas apoiadas',
            'value' => '50',
            'visible' => true
        ]);

        DB::table('impacts')->insert([    
            'description' => 'Salas de aulas equipadas',
            'value' => '210',
            'visible' => true
        ]);

        DB::table('impacts')->insert([    
            'description' => 'Alunos apoiados anualmente',
            'value' => '10.000',
            'visible' => true
        ]);

        DB::table('impacts')->insert([    
            'description' => 'Crianças arfãs de mãe, acolhidas de 2017 a 2022 na Casa da Mamé',
            'value' => '30',
            'visible' => true
        ]);

        DB::table('impacts')->insert([    
            'description' => 'Bolsas de estudo',
            'value' => '18',
            'visible' => true
        ]);

        DB::table('impacts')->insert([    
            'description' => 'Bibliotecas: infantil, adultos e itinerante, equipadas com mais de 10.000 livros',
            'value' => '5',
            'visible' => true
        ]);

        DB::table('impacts')->insert([    
            'description' => 'Salas de informática equipadas com 60 computadores',
            'value' => '2',
            'visible' => true
        ]);
    }
}
