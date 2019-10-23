<?php

use Illuminate\Database\Seeder;

class AuthorMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('author_masters')->insert([
            [
                'author'=> '夏目漱石',
                'default_color'=>'#FFFF00',
                'average_color'=>'#FFFF00',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'author'=> '森鴎外',
                'default_color'=>'#FFFF00',
                'average_color'=>'#FFFF00',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'author'=> '川端康成',
                'default_color'=>'#FFFF00',
                'average_color'=>'#FFFF00',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
