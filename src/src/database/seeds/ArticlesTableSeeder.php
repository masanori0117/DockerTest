<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'user_id' => 1,
            'title' => 'テスト投稿1',
            'body' => 'これはテスト投稿1です',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('articles')->insert([
            'user_id' => 2,
            'title' => 'テスト投稿2',
            'body' => 'これはテスト投稿2です',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('articles')->insert([
            'user_id' => 1,
            'title' => 'テスト投稿1',
            'body' => 'これはテスト投稿1です',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
