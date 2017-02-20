<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        $tasks=Task::all();
        return view('tasks.index',compact('tasks'));
    }
    public function show($id){
        $taskid = Task::find($id);
        return view('tasks.show',compact('taskid'));
    }
//    public function show(Task $id){//Task find(wildcard) $id name ar route ar id name same hota hoba.
//        return view('tasks.show',compact('id'));
//    }
}
