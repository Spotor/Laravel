<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function indexP ()
    {
        $list_pessoas = Pessoa::all();
        return view('pessoas.indexp', ['pessoas' => $list_pessoas]);
    }
}
