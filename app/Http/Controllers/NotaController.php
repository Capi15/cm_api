<?php

namespace App\Http\Controllers;

use \App\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index()
    {
        return Nota::all();
    }

    public function show(Nota $nota)
    {
        return $nota;
    }

    public function store(Request $request)
    {
        $nota = Nota::create($request->all());

        return response()->json($nota, 201);
    }

    public function update(Request $request, Nota $nota)
    {
        $nota->update($request->all());

        return response()->json($nota, 200);
    }

    public function delete(Nota $nota)
    {
        $nota->delete();

        return response()->json(null, 204);
    }
}
