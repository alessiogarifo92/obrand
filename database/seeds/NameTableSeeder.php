<?php

use Illuminate\Database\Seeder;
use App\Name;

class NameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // factory(Name::class , 15) -> create();

      // impostazione valori array personalizzati
      $names = array(
        array('language' => 'italiano', 'NodeName' => 'Marketing','idNode'=> 1),
        array('language' => 'english', 'NodeName' => 'Marketing','idNode'=> 1),
        array('language' => 'italiano', 'NodeName' => 'Supporto Tecnico','idNode'=> 2),
        array('language' => 'english', 'NodeName' => 'Helpdesk','idNode'=> 2),
        array('language' => 'italiano', 'NodeName' => 'Manager','idNode'=> 3),
        array('language' => 'english', 'NodeName' => 'Managers','idNode'=> 3),
        array('language' => 'italiano', 'NodeName' => 'Assistenza Cliente','idNode'=> 4),
        array('language' => 'english', 'NodeName' => 'Customer Account','idNode'=> 4),
        array('language' => 'italiano', 'NodeName' => 'Obrand srl','idNode'=> 5),
        array('language' => 'english', 'NodeName' => 'Obrand srl','idNode'=> 5),
        array('language' => 'italiano', 'NodeName' => 'Amministrazione','idNode'=> 6),
        array('language' => 'english', 'NodeName' => 'Accounting','idNode'=> 6),
        array('language' => 'italiano', 'NodeName' => 'Supporto Vendite','idNode'=> 7),
        array('language' => 'english', 'NodeName' => 'Sales','idNode'=> 7),
        array('language' => 'italiano', 'NodeName' => 'Italia','idNode'=> 8),
        array('language' => 'english', 'NodeName' => 'Italy','idNode'=> 8),
        array('language' => 'italiano', 'NodeName' => 'Europa','idNode'=> 9),
        array('language' => 'english', 'NodeName' => 'Europe','idNode'=> 9),
        array('language' => 'italiano', 'NodeName' => 'Sviluppatori','idNode'=> 10),
        array('language' => 'english', 'NodeName' => 'Developers','idNode'=> 10),
        array('language' => 'italiano', 'NodeName' => 'Nord America','idNode'=> 11),
        array('language' => 'english', 'NodeName' => 'North America','idNode'=> 11),
        array('language' => 'italiano', 'NodeName' => 'Controllo Qualità','idNode'=> 12),
        array('language' => 'english', 'NodeName' => 'Quality Assurance','idNode'=> 12),
     );
    // creazione in tabella names
     foreach ($names as $name) {
         Name::create([
          'idNode' => $name['idNode'],
          'language' => $name['language'],
          'NodeName' => $name['NodeName']
        ]);
     }
    }
}
