<?php

namespace App\Models\Financas\Residencial;

use Illuminate\Database\Eloquent\Model;

class Financas extends Model
{
    protected $fillable = [
        'nomeConta', 'dataVenc', 'dataPag', 'Valor', 'description'
    ];
}