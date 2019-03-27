<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view('system_management.login');
    }

    public function login(Request $request) {
        $auth = array(
            'email' => $request->email,
            'password'  => $request->password,
        );
        if (Auth::guard('admin')->attempt($auth))
            return redirect()->route('system_management.home');
        return redirect()->route('system_management.login');
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect()->route('system_management.login');
    }
}
