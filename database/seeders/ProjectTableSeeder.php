<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;


class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {




        Project::insert([
            [
                'titolo' => 'Boolbnb',
                'descrizione' => 'Rappresentazione di AirBnb',
                'data' => '2023-09-21',
                'type_id' => 1
            ],
            [
                'titolo' => 'BoolFlix',
                'descrizione' => 'Rappresentazione di Netflix',
                'data' => '2023-06-21',
                'type_id' => 2
            ],
            [
                'titolo' => 'Boolzapp',
                'descrizione' => 'Rappresentazione di Whatsapp',
                'data' => '2023-05-11',
                'type_id' => 2
            ],
            [
                'titolo' => 'Discord',
                'descrizione' => 'Rappresentazione di Discord',
                'data' => '2023-04-18',
                'type_id' => 3
            ]

        ]);
    }
}
