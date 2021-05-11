<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{

  protected $fillable = [
    'language',
    'NodeName'
  ];

  // names belongsTo single node_tree
  public function node_tree()
  {
    // richiamo model node_tree con fk
    return $this->belongsTo('App\node_tree','idNode');
  }

}
