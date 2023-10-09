<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology::insert([
            [
                'nome' => 'Html',
                'icona' => 'fa-brands fa-html5',
            ],
            [
                'nome' => 'Css',
                'icona' => 'fa-brands fa-css3-alt',
            ],
            [
                'nome' => 'Javascript',
                'icona' => 'fa-brands fa-js',
            ],
            [
                'nome' => 'Vue',
                'icona' => 'fa-brands fa-vuejs',
            ],
            [
                'nome' => 'Php',
                'icona' => 'fa-brands fa-php',
            ],
            [
                'nome' => 'MySQL',
                'icona' => 'fa-solid fa-database',
            ],
            [
                'nome' => 'Laravel',
                'icona' => 'fa-brands fa-laravel'
            ],
            [
                'nome' => 'SASS',
                'icona' => 'fa-brands fa-sass'
            ],
        ]);
    }
}
