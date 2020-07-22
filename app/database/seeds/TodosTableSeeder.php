<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルのクリア
        DB::table('todos')->truncate();

        // 初期データの用意
        $todos = [
            [
                'content' => 'にんじんを買う',
            ],
            [
                'content' => '石鹸を買う',
            ],
            [
                'content' => '免許更新に行く',
            ],
        ];

        // 1件ずつレコードを登録
        foreach ($todos as $todo) {
            \App\Todo::create($todo);
        }
    }
}
