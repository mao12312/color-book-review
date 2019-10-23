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
                'default_color'=>'#F0F0F0',
                'average_color'=>'#F0F0F0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'author'=> '森鴎外',
                'default_color'=>'#45FF62',
                'average_color'=>'#45FF62',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'author'=> '川端康成',
                'default_color'=>'#45B7FF',
                'average_color'=>'#45B7FF',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
