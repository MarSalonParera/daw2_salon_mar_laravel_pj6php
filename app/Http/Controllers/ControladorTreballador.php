<?php

namespace App\Http\Controllers;

use App\Models\Treballador;
use Illuminate\Http\Request;

class ControladorTreballador extends Controller
{
    public function index()
    {
        $dades_treballadors = Treballador::all();
        return view('llista', compact('dades_treballadors'));
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
 public function store(Request $request)
    {
        Treballador::create($request->all());
        return redirect()->route('treballadors.index');
    }


    Treballador::create($request->all());

    return redirect()->route('treballadors.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $treballador = Treballador::findOrFail($id);
        return view('show', compact('treballador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
   
    public function edit(string $id)
    {
        $treballador = Treballador::findOrFail($id);
        return view('edit', compact('treballador'));
    }

    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, string $id)
    {
        $treballador = Treballador::findOrFail($id);
        $treballador->update($request->all());

        return redirect()->route('treballadors.index');
    }


return redirect()->route('treballadors.index');
}

    /**
     * Remove the specified resource from storage.
     */
public function destroy(string $id)
    {
        Treballador::findOrFail($id)->delete();
        return redirect()->route('treballadors.index');
    }
}
