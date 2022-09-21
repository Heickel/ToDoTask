<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use App\Models\Project;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        $users = User::all();
        $projects = User::all();

        return view('task.index',compact('tasks','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $projects= Project::all();
        return view('task.create', ['users'=>$users], ['projects'=>$projects]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'user_id' => 'required',
            'description' => 'required',
            'deadline'=> 'required',
            'status' => 'required',
            'project_id'=>'required',
        ]);
        $show = Task::create($validatedData);

        return redirect('/tasks')->with('success', 'Task is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   // public function show($id)
    //{
     //   dd(auth()->id);
      //  $tasks = Task::all()->where('user_id', '=', auth()->id);
      //  $users = User::all();
      //  $projects = User::all();

      //  return view('task.',compact('tasks','users'));
   // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        $user = User::all();
        $project = Project::all();

        return view('task.edit', compact('task', 'user', 'project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'user_id' => 'required',
            'description' => 'required',
            'deadline'=> 'required',
            'status' => 'required',
            'project_id'=>'required',
        ]);
        Task::whereId($id)->update($validatedData);

        return redirect('/tasks')->with('success', 'Task Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect('/tasks')->with('success', 'Task Data is successfully deleted');
    }
}

