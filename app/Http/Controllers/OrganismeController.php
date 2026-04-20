<?php

namespace App\Http\Controllers;

use App\Models\Organisme;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrganismeController extends Controller
{
    public function index(): View
    {
        $organismes = Organisme::orderBy('id')->get();

        return view('organismes.index', compact('organismes'));
    }

    public function create(): View
    {
        return view('organismes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate($this->rules());
        $data['actiu'] = $request->boolean('actiu');

        Organisme::create($data);

        return redirect()
            ->route('organismes.index')
            ->with('status', 'Organisme creat correctament.');
    }

    public function show(Organisme $organisme): View
    {
        return view('organismes.show', compact('organisme'));
    }

    public function edit(Organisme $organisme): View
    {
        return view('organismes.edit', compact('organisme'));
    }

    public function update(Request $request, Organisme $organisme): RedirectResponse
    {
        $data = $request->validate($this->rules($organisme->id));
        $data['actiu'] = $request->boolean('actiu');

        $organisme->update($data);

        return redirect()
            ->route('organismes.index')
            ->with('status', 'Organisme actualitzat correctament.');
    }

    public function destroy(Organisme $organisme): RedirectResponse
    {
        $organisme->delete();

        return redirect()
            ->route('organismes.index')
            ->with('status', 'Organisme eliminat correctament.');
    }

    public function pdf(Organisme $organisme)
    {
        $pdf = Pdf::loadView('pdf.organisme', compact('organisme'));

        return $pdf->download('organisme-'.$organisme->id.'.pdf');
    }

    private function rules(?int $organismeId = null): array
    {
        $uniqueRule = 'required|string|max:255|unique:organismes,codi_oficial';

        if ($organismeId !== null) {
            $uniqueRule .= ',' . $organismeId;
        }

        return [
            'titol_llibre' => 'required|string|max:255',
            'codi_oficial' => $uniqueRule,
            'nom_organisme' => 'required|string|max:255',
            'tipus' => 'required|in:organisme,fons,programa,agencia',
            'any_fundacio' => 'required|integer|min:1800|max:2100',
            'pressupost_anual' => 'required|numeric|min:0',
            'pais_seu' => 'required|string|max:255',
            'ciutat_seu' => 'required|string|max:255',
            'data_creacio_registre' => 'required|date',
            'nombre_empleats' => 'required|integer|min:0',
            'actiu' => 'nullable|boolean',
            'web_oficial' => 'required|url|max:255',
        ];
    }
}
