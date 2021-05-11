<?php

namespace App\Http\Controllers;
use App\node_tree;
use App\Name;
use Illuminate\Support\MessageBag;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // controller richieste inviate da form
    public function dataIndex(Request $request)
    {
      // stabilisco regole per validazioni
      $rules = [
        'idNode' => 'required|integer|min:1|max:12',
        'language' => 'required',
    ];

    // personalizzo messaggi errore
    $customMessages = [
        'idNode.required' => 'Parametri obbligatori mancanti',
        'idNode.min' => 'ID nodo non valido',
        'idNode.max' => 'ID nodo non valido'
    ];

    $this->validate($request, $rules, $customMessages);

        // creo variabile con dati da passare al frontend
      $user = Name::where([
        ['idNode', '=', $request-> idNode],
        ['language', '=', $request-> language]
        ])->first();
      // dd($request-> idNode,$request-> language);
      //ritorno dati in view api compattandoli
      return view('api' , compact('user'));
    }

}
