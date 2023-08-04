<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function create(){
        return view("tasks.create");
    }

    public function store(){
        $data = request()->validate([
            "task_name" => "required",
            "task_description" => "nullable",
            "task_type" => "required",
        ]);

        auth()->user()->tasks()->create($data);

        return redirect("/dashboard");
    }

    public function destroy(\App\Models\Task $task){
        $task->delete();
        return redirect("/dashboard");
    }

    public function edit(\App\Models\Task $task){

        return view("tasks.edit",compact("task"));
    }

    public function update(\App\Models\Task $task){
        $data = request()->validate([
            "task_name" => "required",
            "task_description" => "nullable",
            "task_type" => "required",
        ]);

        $task->update($data);

        return redirect("/dashboard");
    }



}
