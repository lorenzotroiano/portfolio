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
                'anno' => '2023',
                'immagine' => 'https://www.sitebysite.it/wp-content/uploads/2022/10/Come-cambieranno-i-siti-web-2023_sito1.jpg',
                'link' => 'ciao',
                'type_id' => 1
            ],
            [
                'titolo' => 'BoolFlix',
                'descrizione' => 'Rappresentazione di Netflix',
                'anno' => '2021',
                'immagine' => 'https://www.kasadellacomunicazione.it/wp-content/uploads/2020/08/migliori-siti-web.jpg',
                'link' => 'ciaob',
                'type_id' => 2
            ],
            [
                'titolo' => 'Boolzapp',
                'descrizione' => 'Rappresentazione di Whatsapp',
                'anno' => '2022',
                'immagine' => 'https://www.informarea.it/wp-content/uploads/upload/2013/07/risoluzione_video_siti_web.jpg',
                'link' => 'ciaode',
                'type_id' => 2
            ],
            [
                'titolo' => 'Discord',
                'descrizione' => 'Rappresentazione di Discord',
                'anno' => '2020',
                'immagine' => 'https://kinsta.com/it/wp-content/uploads/sites/2/2021/12/software-di-progettazione-di-siti-web.png',
                'link' => 'ciaosium',
                'type_id' => 3
            ]

        ]);
    }
}
