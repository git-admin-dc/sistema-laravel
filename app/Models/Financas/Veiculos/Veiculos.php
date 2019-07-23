<?php

namespace App\Models\Financas\Veiculos;

use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    protected $fillable = [
        'nomeVeiculo', 'placa', 'renavam', 'debitos', 'description'
    ];
}