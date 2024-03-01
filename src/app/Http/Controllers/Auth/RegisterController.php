<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

   // ユーザ登録ページを表示
    public function showRegistrationForm()
    {
        return view('register');
    }

    // RegisterRequestを使ったバリデーション
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    // 既存のcreateメソッドをそのまま使用
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // ユーザ登録処理
    public function register(RegisterRequest $request)
    {
        $user = $this->create($request->all()); // createメソッドを呼ぶ
        // $this->guard()->login($user); // 登録したユーザーをログイン状態にする

        // return $this->registered($request, $user)
        //     ?: redirect($this->redirectPath());
    }
}