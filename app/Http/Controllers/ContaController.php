<?php

namespace App\Http\Controllers;

use App\Conta;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function indexC ()
    {
        $list_contas = Conta::all();
        return view('contas.indexc', ['contas' => $list_contas]);
    }
}
