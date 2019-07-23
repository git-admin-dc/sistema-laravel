<?php

namespace App\Http\Controllers\Financas\Veiculos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Financas\Veiculos\Veiculos;
use Illuminate\Database\Eloquent\Model;

class FinancasController extends Controller
{
    private $chaves;

    public function __construct(Veiculos $veiculos)
    {
        $this->middleware('auth');
        $this->veiculos = $veiculos;
    }

    public function index()
    {
        return view('financas.veiculos.motogs500e');
    }

    public function motogs500e()
    {
        $viewveiculos = Veiculos::select('nomeVeiculo', 'placa', 'renavam', 'debitos', 'description')
                                    ->where('nomeVeiculo', 'GS500E (kenpachi)')
                                    ->orderBy('nomeVeiculo', 'asc')
                                    ->get();
        //dd($viewagua);Ryuk
        return view('financas.veiculos.motogs500e')
                    ->with(["viewveiculos" => $viewveiculos]);

    }

    public function mototwister()
    {
        $viewveiculos = Veiculos::select('nomeVeiculo', 'placa', 'renavam', 'debitos', 'description')
                                    ->where('nomeVeiculo', 'Twister (Miza)')
                                    ->orderBy('nomeVeiculo', 'asc')
                                    ->get();
        //dd($viewagua);
        return view('financas.veiculos.mototwister')
                    ->with(["viewveiculos" => $viewveiculos]);
    }

    public function carrovectra()
    {
        $viewveiculos = Veiculos::select('nomeVeiculo', 'placa', 'renavam', 'debitos', 'description')
                                    ->where('nomeVeiculo', 'Vectra (Ryuk)')
                                    ->orderBy('nomeVeiculo', 'asc')
                                    ->get();
        //dd($viewagua);Ryuk
        return view('financas.veiculos.carrovectra')
                    ->with(["viewveiculos" => $viewveiculos]);
    }
}
