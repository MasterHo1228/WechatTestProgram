<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'gender' => $request->gender,
            'openId' => $request->openId,
            'avatarUrl' => $request->avatarUrl,
            'country' => $request->country,
            'city' => $request->city,
        ]);

//        $this->sendEmailConfirmationTo($user);
//        session()->flash('success', '验证邮件已发送到你的注册邮箱上，请注意查收。');
//        return redirect()->route('signin');
    }
}
