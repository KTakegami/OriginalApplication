<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //UserFactoryの情報を参照しfakerを作成
        // factory(App\Models\User::class, 5)->create();

        DB::table('users')->delete();
    }
}
