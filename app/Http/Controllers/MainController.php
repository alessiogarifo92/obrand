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

      // ottengo dati da tabella node_tree
      $results = Name::with('node_tree')->get();
      // ciclo per trovare valori in tabell node_tree
      foreach ($results as $node_tree) {
        // echo $node_tree->id; //access Names table data
        // condizione se idNode richiesto == idNode in tabella ritorna il relativo level
        if ($request-> idNode == $node_tree->node_tree->idNode) {
         $resultedLevel = $node_tree->node_tree->level;//access node_tree table data
         $resultedLeft = $node_tree->node_tree->_lft;
         $resultedRight = $node_tree->node_tree->_rgt;

          // operazione per trovare children_count tra colonna right e left
         $children_count = ($resultedRight - $resultedLeft) - 1;

        }

      };

      // dd($request-> idNode,$node_tree->node_tree->idNode,$node_tree->node_tree->level);
      //ritorno dati in view api compattandoli
      return view('api' , compact('user','resultedLevel','resultedLeft','resultedRight','children_count'));
    }

}
