<?php

namespace App\Http\Controllers;

use App\Models\TodoModel;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
    $todos = TodoModel::all();
     return view('index',['todos'=>$todos]);
       
    }
  
    public function create(){
        return view('task.create');
    }

    public function store(Request $request){
          $todo = new TodoModel();
          $todo->title=$request->title;
          $todo->description=$request->description;
          $todo->status=$request->status;
        
        $todo->save();
        
         return back()->withSuccess('Todo successfuly created!'); 
       
      
      }

      public function edit($id){
        $todo=TodoModel::find($id)->first();
    
        return view('task.edit',['todo'=>$todo]);
    }
    public function update(Request $request,$id){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'status'=>'required'
        ]);

        $todo=TodoModel::find($id)->first();

        $todo->title=$request->title;
        $todo->description=$request->description;
        $todo->status=$request->description;
        $todo->save();
       return back()->withSuccess('Task successfuly update!'); 

    }
    public function destroy($id){
        $todo = TodoModel::find($id)->first();
         $todo->delete();
        return back()->withSuccess('Task successfully deleted!!');
    }
  
}
