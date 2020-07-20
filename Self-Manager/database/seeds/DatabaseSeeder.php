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
        // usersテーブルのseederを呼び出し
        $this->call(UsersTableSeeder::class);

        //loginsテーブルのseederを呼び出し
        $this->call(LoginsTableSeeder::class);
    }
}
