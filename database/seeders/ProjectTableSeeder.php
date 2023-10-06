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
                'immagine' => 'https://www.sitebysite.it/wp-content/uploads/2022/10/Come-cambieranno-i-siti-web-2023_sito1.jpg',
                'type_id' => 1
            ],
            [
                'titolo' => 'BoolFlix',
                'descrizione' => 'Rappresentazione di Netflix',
                'data' => '2023-06-21',
                'immagine' => 'https://www.kasadellacomunicazione.it/wp-content/uploads/2020/08/migliori-siti-web.jpg',
                'type_id' => 2
            ],
            [
                'titolo' => 'Boolzapp',
                'descrizione' => 'Rappresentazione di Whatsapp',
                'data' => '2023-05-11',
                'immagine' => 'https://www.informarea.it/wp-content/uploads/upload/2013/07/risoluzione_video_siti_web.jpg',
                'type_id' => 2
            ],
            [
                'titolo' => 'Discord',
                'descrizione' => 'Rappresentazione di Discord',
                'data' => '2023-04-18',
                'immagine' => 'https://kinsta.com/it/wp-content/uploads/sites/2/2021/12/software-di-progettazione-di-siti-web.png',
                'type_id' => 3
            ]

        ]);
    }
}
