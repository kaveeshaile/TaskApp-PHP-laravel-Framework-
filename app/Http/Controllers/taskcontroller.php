<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class taskcontroller extends Controller
{
    public function store(Request $request){
                     
            $task= new Task;

            $this->validate($request,[
                    'task'=>'required|max:100|min:2'

            ]);


            $task->task=$request->task;
            $task->save();

            $data=Task::all();
            //dd($data);check
            return view('task')->with('tasks',$data);
 

    }

    public function updatetaskcompleted($id){
        $task=Task::find($id);
        $task->iscompleted=1;
        $task->save();
        return redirect()->back();

    }

    public function taskdelete($id){
        $task=Task::find($id);
  
        $task->delete();
        return redirect()->back();

    }


    public function taskupdate($id){
        $task=Task::find($id);
  
       
        return view('update')->with('taskdata',$task);

    }



    public function taskupdatedata(request $request){


        $id=$request->id;
        $task=$request->task;
        $data=Task::find($id);
        $data->task=$task;
       
        $data->save();
        $data=Task::all();
      
        return view('task')->with('tasks',$data);
     
           

    }



}
