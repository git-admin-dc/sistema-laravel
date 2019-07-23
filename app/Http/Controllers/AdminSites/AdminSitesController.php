<?php

namespace App\Http\Controllers\AdminSites;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Modelo;
use Illuminate\Database\Eloquent\Model;

class AdminSitesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('adminsites.adminsites');
    }
}
