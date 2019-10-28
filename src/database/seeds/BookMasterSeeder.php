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
                'title'=> "ノルウェイの森",
                'author'=>"村上春樹",
                'category'=>"小説",
                'default_color'=>'#111111',
                'average_color'=>'#111111',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'=> 'ハリー・ポッターと賢者の石',
                'author'=>"J・K・ローリング",
                'category'=>"小説",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> '罪と罰 ',
                'author'=>"フョードル・ミハイロヴィチ・ドストエフスキー",
                'category'=>"小説",
                'default_color'=>'#FF8545',
                'average_color'=>'#FF8545',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> '舟を編む',
                'author'=>"三浦しをん",
                'category'=>"小説",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> '星の王子さま',
                'author'=>"アントワーヌ・ド・サン＝テグジュペリ",
                'category'=>"小説",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> '人間失格',
                'author'=>"太宰治",
                'category'=>"小説",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> 'スティーブ・ジョブズ = Steve Jobs',
                'author'=>"ウォルター・アイザックソン",
                'category'=>"ビジネス本",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> '坊ちゃん',
                'author'=>"夏目漱石",
                'category'=>"小説",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> 'ファスト&スロー : あなたの意思はどのように決まるか?',
                'author'=>"ダニエル・カーネマン",
                'category'=>"ビジネス本",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> '図書館戦争',
                'author'=>"有川浩",
                'category'=>"小説",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> 'NARUTO -ナルト-',
                'author'=>"岸本斉史",
                'category'=>"漫画",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> 'ONE PIECE',
                'author'=>"尾田栄一郎",
                'category'=>"漫画",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> 'キングダム',
                'author'=>"原泰久",
                'category'=>"漫画",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> '鋼の錬金術師',
                'author'=>"荒川弘",
                'category'=>"漫画",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> 'ちはやふる',
                'author'=>"末次由紀",
                'category'=>"漫画",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> '進撃の巨人',
                'author'=>"諫山創",
                'category'=>"漫画",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> '君に届け',
                'author'=>"椎名軽穂",
                'category'=>"漫画",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> 'のだめカンタービレ',
                'author'=>"二ノ宮知子",
                'category'=>"漫画",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> 'ジョジョの奇妙な冒険',
                'author'=>"荒木飛呂彦",
                'category'=>"漫画",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'title'=> 'アオハライド',
                'author'=>"咲坂伊緒",
                'category'=>"漫画",
                'default_color'=>'#BFFF45',
                'average_color'=>'#BFFF45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],

        ]);
    }
}
