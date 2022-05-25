<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        if(Auth::check()){
            return redirect()->route(PRODUCT_LIST);
        }
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route(SHOW_LOGIN);
    }

    public function doLogin(LoginRequest $request)
    {
        $request->validated();
        $userName = $request->username;
        $password = $request->password;

        if (filter_var($userName, FILTER_VALIDATE_EMAIL)) {
            $field = 'email';
        } else {
            $field = 'username';
        }

        $credentials = [
            $field => $userName,
            'password' => $password,
            'status' => ENABLE,
            'deleted_at' => null
        ];
        if (Auth::attempt($credentials)) {
            $prefix = base64_encode('scrap-store');
            $us = $prefix.'-'.base64_encode($userName);
            $ps = base64_encode($password).'-'.$prefix;
            return redirect()->intended("/admin/product")->with(['us' => $us, 'ps' => $ps]);
        }

        return redirect()->back()
            ->withInput()
            ->withErrors(['Tên tài khoản hoặc Mật khẩu không đúng. <br/>Vui lòng thử lại']);
    }

}
