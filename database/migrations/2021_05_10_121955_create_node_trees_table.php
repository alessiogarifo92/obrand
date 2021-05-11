<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Kalnoy\Nestedset\NestedSet;

class CreateNodeTreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // impostazioni migration/colonne tabella node_trees utilizzando nestedSet
        Schema::create('node_trees', function (Blueprint $table) {
          $table->id('idNode');
          $table->string('level');
          $table->nestedSet();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('node_trees');
    }
}
