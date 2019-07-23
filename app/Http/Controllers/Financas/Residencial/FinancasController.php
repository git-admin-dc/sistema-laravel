<?php

namespace App\Http\Controllers\Financas\Residencial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Financas\Residencial\Financas;
use Illuminate\Database\Eloquent\Model;

class FinancasController extends Controller
{
    private $chaves;

    public function __construct(Financas $financas)
    {
        $this->middleware('auth');
        $this->financas = $financas;
    }

    public function index()
    {
        return view('financas.residencial.financas');
    }

    public function agua()
    {
        $viewagua = Financas::select('nomeConta', 'dataVenc', 'dataPag', 'Valor', 'description')
                                    ->where('nomeConta', 'Sabesp')
                                    ->orderBy('Data', 'asc')
                                    ->get();
        //dd($viewagua);
        return view('financas.residencial.agua')
                    ->with(["viewagua" => $viewagua]);

    }

    public function luz()
    {
        $viewluz = Financas::select('nomeConta', 'dataVenc', 'dataPag', 'Valor', 'description') 
                                    ->where('nomeConta', 'EletroPaulo')                                   
                                    ->orderBy('Data', 'asc')
                                    ->get();
        //dd($viewagua);
        return view('financas.residencial.luz')
                    ->with(["viewluz" => $viewluz]);
    }

    public function residencialoutros()
    {
        $viewresidencialoutros = Financas::select('nomeConta', 'dataVenc', 'dataPag', 'Valor', 'description') 
                                                  ->where('nomeConta', 'ResidencialOutros')                                   
                                                  ->orderBy('Data', 'asc')
                                                  ->get();
        //dd($viewagua);
        return view('financas.residencial.residencialoutros')
                    ->with(["viewresidencialoutros" => $viewresidencialoutros]);
    }
}
