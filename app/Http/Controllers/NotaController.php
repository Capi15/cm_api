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

    public function show($id)
    {
        return Nota::findOrFail($id);
    }

    public function store(Request $request)
    {
        $nota = Nota::create($request->all());

        return response()->json($nota, 201);
    }

    public function update(Request $request, $id)
    {
        $nota = Nota::findOrFail($id);
        $nota->update($request->all());

        return response()->json($nota, 200);
    }

    public function delete($id)
    {
        $nota = Nota::findOrFail($id);
        $nota->delete();

        return response()->json(null, 204);
    }
}
