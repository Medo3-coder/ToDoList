<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;


class TodoController extends Controller
{
    public function index()
    {
       $todos = Todo::orderBy('completed')->get();
       return view('todo.index' , compact('todos'));
    }

    public function create()
    {
        return view('todo.create') ;
    }


    public function upload(Request  $request )
    {
        $this->validData($request );

       $todo =  $request->title;
       Todo::create(['title'=> $todo]);
       return redirect()->back()->with('success' , 'Todo Created Successfully');
    }


    public function edit($id)
    {
        $todo = Todo::find($id);

        return view('todo.edit' ,compact('todo')) ;
    }


    public function update(Request $request)
    {
        $this->validData($request);

        $update = Todo::find($request->id);
        $update->update(['title'=> $request->title]) ;

        return redirect('/index')->with('success' , 'ToDo Updatad Successfully');

    }

    public function completed($id)
    {

        $todo = Todo::find($id);
        if($todo->completed){
            $todo->update(['completed'=> false ]);
            return redirect()->back()->with('success', ' Todo marked inComplete');
        }
        else
        {
            $todo->update(['completed'=> true ]);
            return redirect()->back()->with('success', ' Todo marked is Complete');
        }

    }

    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->back()->with('success', ' Todo is Deleted Successfully');

    }



    public function validData( $request)
    {
        $request->validate([
            'title'=>'required|max:100'
        ]);
    }
}
