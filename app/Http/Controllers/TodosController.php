<?php

namespace App\Http\Controllers;

use App\todo;
use Session;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        $todos = todo::all();
        return view('todos')->with('todos',$todos);
    }
    
    public function add(request $req){
        $todo = new todo;
        
        $todo->todo = $req->todo;
        $todo->save();
        
        Session::flash('success','Your Todo Has Been Added !');
        return redirect()->back();
    }
    
    public function delete($id){
        $todo = todo::find($id);
        
        $todo->delete();
        Session::flash('success','Your Todo Has Been Deleted !');
        return redirect()->back();
    }
    
    public function update($id){
        $todo = todo::find($id);
        return view('update')->with('todo',$todo);
    }
    
    public function save(request $req, $id){
        $todo = todo::find($id);
        $todo->todo = $req->todo;
        
        $todo->save();
        
        Session::flash('success','Your Todo Has Been Updated !');
        return redirect('todo');
    }
    
    public function complete($id){
        $todo = todo::find($id);
        
        $todo->completed = 1;
        
        $todo->save();
        
        Session::flash('success','Your Todo Has Been Completed !');
        return redirect()->back();
    }
    
}
