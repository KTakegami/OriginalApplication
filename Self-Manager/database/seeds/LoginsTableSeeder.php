<?php

use Illuminate\Database\Seeder;
use App\Models\Login;

class LoginsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logins')->delete();

        //下記fakerを作成
        // $login = new Login([
        //         'user_id' => '1'
        //     ]);
        //     $login->save();

        // $login = new Login([
        //         'user_id' => '2'
        //     ]);
        //     $login->save();

        // $login = new Login([
        //         'user_id' => '3'
        //     ]);
        //     $login->save();

        // $login = new Login([
        //         'user_id' => '4'
        //     ]);
        //     $login->save();

        // $login = new Login([
        //         'user_id' => '5'
        //     ]);
        //     $login->save();
    }
}
