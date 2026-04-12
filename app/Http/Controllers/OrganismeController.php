<?php

namespace App\Http\Controllers;

use App\Models\Organisme;
use Illuminate\Http\Request;

class OrganismeController extends Controller
{
    public function index()
    {
        $organismes = Organisme::all();
        return view('organismes.index', compact('organismes'));
    }

    public function create()
    {
        return view('organismes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titol_llibre' => 'required',
            'codi_oficial' => 'required|unique:organismes',
            'nom_organisme' => 'required',
            'tipus' => 'required',
            'any_fundacio' => 'required',
            'pressupost_anual' => 'required',
            'pais_seu' => 'required',
            'ciutat_seu' => 'required',
            'data_creacio_registre' => 'required',
            'nombre_empleats' => 'required',
            'actiu' => 'required',
            'web_oficial' => 'required'
        ]);

        Organisme::create($data);

        return redirect('/organismes');
    }

    public function show($id)
    {
        $organisme = Organisme::findOrFail($id);
        return view('organismes.show', compact('organisme'));
    }

    public function edit($id)
    {
        $organisme = Organisme::findOrFail($id);
        return view('organismes.edit', compact('organisme'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'titol_llibre' => 'required',
            'codi_oficial' => 'required',
            'nom_organisme' => 'required',
            'tipus' => 'required',
            'any_fundacio' => 'required',
            'pressupost_anual' => 'required',
            'pais_seu' => 'required',
            'ciutat_seu' => 'required',
            'data_creacio_registre' => 'required',
            'nombre_empleats' => 'required',
            'actiu' => 'required',
            'web_oficial' => 'required'
        ]);

        Organisme::findOrFail($id)->update($data);

        return redirect('/organismes');
    }

    public function destroy($id)
    {
        Organisme::findOrFail($id)->delete();

        return redirect('/organismes');
    }
}