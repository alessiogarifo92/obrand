<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // creo tabelle con seeder
        $this->call([
          node_treeTableSeeder::class,
          NameTableSeeder::class
        ]);
    }
}
