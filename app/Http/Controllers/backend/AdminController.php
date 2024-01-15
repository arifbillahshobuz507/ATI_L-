<?php

namespace App\Http\Controllers\backend;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
  public function index()
  {
    $admins = Admin::all();
    return view('backend.pages.admin.list', compact('admins'));
  }


  public function form(Request $request)
  {
    return view("backend.pages.admin.form");
  }

  // store admin code 
  public function store(Request $request)
  {
    // dd($request->all());
    $validate = Validator::make($request->all(), [
      'email' => 'required',
      'phone' => 'required',
      'password' => 'required',
    ]);

    if ($validate->fails()) {
      return redirect()->back()->withErrors($validate);
    }

    // Hash the password beroe storing
    $hashedPassword = bcrypt($request->password);

    //Create admin
    Admin::create(
      $request->input()
    );
    // Redirect ot the 'admin' route
    return redirect()->route('admins');
  }

  public function delete($id)
  {
    $admins = Admin::find($id);

    if ($admins) {
      $admins->delete();
      return redirect()->route('admins');
    } else {
      return redirect()->route('admins');
    }
  }

  public function edit($id)
  {
    $admins = Admin::find($id);
    if ($admins) {
      return view("backend.pages.admin.edit", compact('admins'));
    }
  }

  // Update Admin code 
  public function update(Request $request, $id)
  {
    $admins = Admin::find($id);
    // Validate request data
    $validate = Validator::make($request->all(), [
      'email' => 'required',
      'phone' => 'required',
    ]);

    //Check validate
    if ($validate->fails()) {
      return redirect()->back()->withErrors($validate);
    } else {
      $admins->update([
        'email' => $request->email,
        'phone' => $request->phone,
      ]);
      return redirect()->route('admins');
    }
  }

  public function view($id)
  {
    $admins = Admin::find($id);

    if ($admins) {
      return view("backend.pages.admin.view", compact('admins'));
    }
  }
  public function email(){
    return view('backend.pages.mail.email');
  }
  
}
