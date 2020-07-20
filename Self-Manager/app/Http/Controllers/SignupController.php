<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; //Userモデルを呼び出し

class SignupController extends Controller
{
    public function signup()
    {
        return view("signup");
    }

  
    public function post(Request $request) {
    $user = new User(); // (Userモデルからインスタンスを作成)

    //アカウント登録ページで入力した値を[usersテーブル]に保存
	$user->name = $request->name;
	$user->birthday = $request->birthday;
	$user->question = $request->question;
	$user->answer = $request->answer;
	$user->email = $request->email;
	$user->password = $request->password;
    $user->save();
    
    //保存後、アカウント登録完了と表示するページに遷移
    return view('signup-conp');
}
}
