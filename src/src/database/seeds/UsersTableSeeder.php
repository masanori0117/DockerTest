<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'USER1',
            'email' => 'user1@tweets.com',
            'password' => bcrypt('12345678'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'USER2',
            'email' => 'user2@tweets.com',
            'password' => bcrypt('12345678'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('users')->insert([
            'name' => 'USER3',
            'email' => 'user3@tweets.com',
            'password' => bcrypt('12345678'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
