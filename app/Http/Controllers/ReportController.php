<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
   public function summarisedReports(){

    $users = User::all();
    return view('report.summarisedReports', compact('users'));
   }
   public function filter( Request $request){
      $startDate = $request->input('start_date');
      // dd($startDate);
      
      $endDate = $request->input('end_date');
      
      // dd($endDate);
      // dd($start_date, $end_date);

    $users = User::WhereBetween('created_at',[$startDate.' 00:00:00',$endDate.' 23:59:59'])->get();
   //  dd($users);
    return view('report.summarisedReports', compact('users'));
   }
}
