<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    //
    public function list()
    {
         $tasks = Task::all();
         return view('tasks', ['my_tasks'=>$tasks]);
    }
}
