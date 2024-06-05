<?php

namespace App\Http\Controllers;
use App\Models\Cadastro;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastro() {

        $cadastros = Cadastro::all();
        return view('formularios.cadastro', ['cadastros' => $cadastros]);
    }
}
