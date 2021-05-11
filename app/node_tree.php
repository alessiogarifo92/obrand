<?php

namespace App;
use Kalnoy\Nestedset\NodeTrait;

use Illuminate\Database\Eloquent\Model;

class node_tree extends Model
{
  protected $primaryKey = 'idNode';
    protected $guarded=[];
    use NodeTrait;

    // colleg relaz 1 to many
    public function names()
    {
      // riporto model Name e fk utilizzata
      return $this->hasMany('App\Name','idNode');
    }
}
