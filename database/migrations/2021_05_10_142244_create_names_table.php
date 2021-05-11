<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // impostazioni migration/colonne tabella names
        Schema::create('names', function (Blueprint $table) {
            $table->id();
            $table->enum('language', ['italiano', 'english']);
            $table->string('NodeName');
            // foreign key
            $table->bigInteger('idNode')->unsigned();

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
        Schema::dropIfExists('names');
    }
}
