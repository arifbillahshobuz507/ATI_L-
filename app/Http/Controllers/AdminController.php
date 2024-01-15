<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    // admin login from
    public function from()
    {
        return view('backend.pages.admin.from');
    }
    //admin do login
    public function login(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }
        $credentials = $request->only('email', 'password');
        $login = Auth::guard('admin');

        if ($login->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withErrors(['massage' => 'somthig is worng']);
        }
    }
    // admin dashboard
    public function dashboard()
    {
        return view('backend.pages.admin.dashboard');
    }
}
