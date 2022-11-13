<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepositorioClienteController extends Controller
{
    public function index()
    {
        return view('repositorio');
    }
}
