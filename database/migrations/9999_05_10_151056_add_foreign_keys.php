<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // creo fk in tabella names
      Schema::table('names', function (Blueprint $table) {
      // fk sarà idNode da tabella node_trees
        $table-> foreign ('idNode','tree-name')
              -> references ('idNode')
              -> on ('node_trees');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      // rollback della fk
      Schema::table('names', function (Blueprint $table) {

          $table-> dropForeign('tree-name');

      });
    }
}
