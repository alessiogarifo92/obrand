<?php

use Illuminate\Database\Seeder;
use App\node_tree;

class node_treeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // popolo tabella node_tree nel database
      $node = App\node_tree::create([
        'level' => '2',
        'children' => [
            [
                'level' => '2',
            ],
            [
                'level' => '2',
            ],
            [
                'level' => '2',

            ],
            [
                'level' => '1'
            ],
            [
                'level' => '2'
            ],
            [
                'level' => '2',
                'children' =>[
                  [
                      'level' => '3'
                  ],
                  [
                      'level' => '3'
                  ],
                  [
                      'level' => '3'
                  ],
                ],
            ],
            [
                'level' => '2',

            ],
            [
                'level' => '2',
            ],

        ],

    ]);
    }
}
