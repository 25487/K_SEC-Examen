<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LaravelCrud extends Controller
{
  function index(){

    $data = array(
      'list'=> DB::table('crud')->get()
    );

    return view('crud.index', $data);

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
  function edit($id){

   $row = DB::table('crud')
              ->where('id', $id)
              ->first();
   $data = [
     'Info'=>$row,
     'Title'=>'Edit'
   ];

   return view('crud.edit', $data);
  }

  function update(Request $request){
    $request->validate([
      'name'=>'required',
      'videotitle'=>'required',
      'description'=>'required'

    ]);
    $updating = DB::table('crud')
                ->where('id', $request->input('cid'))
                ->update([
                  'name'=>$request->input('name'),
                  'videotitle'=>$request->input('videotitle'),
                  'description'=>$request->input('description')
                ]);
                return redirect('crud');
  }

  function delete($id){
    $delete = DB::table('crud')
              ->where('id', $id)
              ->delete();
              return redirect('crud');
  }
}
