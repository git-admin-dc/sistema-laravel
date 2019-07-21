<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelo;
use Illuminate\Database\Eloquent\Model;

class ModeloController extends Controller
{
    public function index()
    {
        $modelos = Modelo::all();
        return view('modelos.index')
                    ->with(['modelos' => $modelos]);
    }

    public function create()
    {
        return view('modelos.create');
    }

    public function store(Request $request)
    {
        Modelo::create($request->all() );

        return redirect()->route('modelo.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
