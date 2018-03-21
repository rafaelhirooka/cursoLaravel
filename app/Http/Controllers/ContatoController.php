<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller {


    public function index() {
        $contatos = array(
            (object)['nome' => 'Maria', 'telefone' => '999694-1420'],
            (object)['nome' => 'João', 'telefone' => '98452-1420'],
        );
        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req) {

        dd($req->all());
        return "Esse é o criar controller do ContatoController.";
    }

    public function editar() {
        return "Esse é o editar controller do ContatoController.";
    }
}
