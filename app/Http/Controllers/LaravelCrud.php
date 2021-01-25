<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LaravelCrud extends Controller
{
  function index(){
    return view('crud.index');

  }
  function add(Request $request){

    $request->validate([
      'name' =>'required',
      'videotitle' => 'required',
      'description' => 'required'
    ]);
    $query = DB::table('crud')->insert([
    'name'=>$request->input('name'),
    'videotitle'=>$request->input('videotitle'),
    'description'=>$request->input('description')
    ]);
    if($query){

      return back()->with('success','Data have been sucessfuly inserted');
    }else{
      return back()->with('fail','Something went wrong');
    }
  }
}
