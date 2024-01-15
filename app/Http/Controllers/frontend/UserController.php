<?php

namespace App\Http\Controllers\frontend;

use Exception;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function form(){
        return view('frontend.pages.customer.registration-form');
    }
    public function store(Request $request){
           
            $validate = Validator::make($request->input(), [
                'email' => 'required|email',
                'password' => 'required',
                'name' => 'required'
            ]);
            if ($validate->fails()) {
                return redirect()->back()->withErrors($validate);
            }
            User::create(
                $request->input()
            );           
      
    }
}
