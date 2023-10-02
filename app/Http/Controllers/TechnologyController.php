<?php

namespace App\Http\Controllers;

use App\Models\Technology;

use Illuminate\Http\Request;

class TechnologyController extends Controller



{





    public function show($id)
    {
        $technology = Technology::findOrFail($id);
        return view('technology.show', compact('technology'));
    }

    public function create()
    {
        return view('technology.create');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        // $project = Project::create($data);


        // $img_path = Storage::put('uploads', $data['main_picture']);
        // $data['main_picture'] = $img_path;

        $technology = Technology::create($data);
        return redirect()->route('technology.show', $technology->id);
    }



    public function edit($id)
    {
        $technology = Technology::findOrFail($id);
        return view('technology.edit', compact('technology'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $technology = Technology::findOrFail($id);

        $technology->update($data);

        return redirect()->route('technology.show', $technology->id);
    }

    public function destroy($id)
    {

        $technology = Technology::findOrFail($id);

        // Recupera i progetti associati a questa tecnologia
        $projects = $technology->projects;

        $technology->projects()->detach();

        $technology->delete();

        // Cicla sui progetti associati e controlla se ciascun progetto non ha più tecnologie
        foreach ($projects as $project) {
            if ($project->technologies->isEmpty()) {
                $project->delete();
            }
        }

        // Reindirizza all'URL della vista 'welcome' dopo l'eliminazione del progetto
        return redirect()->route('dashboard');
    }
}
