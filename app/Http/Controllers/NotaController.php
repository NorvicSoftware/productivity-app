<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    public function index()
    {
        $notas = Nota::all();
        return view('notas.index', compact('notas'));
    }

    public function create()
    {
        return view('notas.create');
    }

    public function store(Request $request)
    {
        Nota::create($request->all());
        return redirect()->route('notas.index');
    }

    public function edit(Nota $nota)
    {
        return view('notas.edit', compact('nota'));
    }

    public function update(Request $request, Nota $nota)
    {
        $nota->update($request->all());
        return redirect()->route('notas.index');
    }

    public function destroy(Nota $nota)
    {
        $nota->delete();
        return redirect()->route('notas.index');
    }
}

