<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use App\Models\Project;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['vue.js', 'laravel', 'js', 'html', 'css', 'php'];

        foreach ($technologies as $techName) {
            $technology = new Technology();
            $technology->nome = $techName;
            $technology->save();
        }

        // Assumi che tu abbia già creato manualmente alcuni oggetti "Project" nel database
        $projects = Project::all();

        // Assumi che tu abbia già creato manualmente gli oggetti "Technology" nel passaggio precedente

        foreach ($projects as $project) {
            // Scegli casualmente un insieme di tecnologie tra quelle create in precedenza
            $technologies = Technology::inRandomOrder()->limit(rand(1, 3))->get();

            // Associa le tecnologie a questo progetto nella tabella pivot
            $project->technologies()->attach($technologies);
        }
    }
}
