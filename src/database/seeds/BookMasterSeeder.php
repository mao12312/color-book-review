<?php

use Illuminate\Database\Seeder;

class BookMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_masters')->insert([
            [
                'title'=> '吾輩は猫である',
                'author_id'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'=> '舞姫',
                'author_id'=>2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> '伊豆の踊り子',
                'author_id'=>3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ]
        ]);
    }
}
