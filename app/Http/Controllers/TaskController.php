<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Task;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Auth;
use App\Notifications\TaskAdded;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->email; 
        $tasks = Task::where('task_owner','=',Auth::user()->first_name)->get();
        return  view('tasks',[
            'tasks' => $tasks 
        ]);
        Notification::send($user, new TaskAdded($tasks));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task_title = $request->task_title;
        $task = Task::create([
            'id' => IdGenerator::generate(['table' => 'tasks', 'field' => 'id'  , 'length' => 10, 'prefix' =>'TSK-']),
            'task_title' => $request->input('task_title'),
            'task_description' =>  $request->input('task_description'),
            'task_status' => $request->input('task_status'),
            'task_due_date' => $request->input('task_due_date'),
            'task_type' => $request->input('task_type'),
            'task_priority' => $request->input('task_priority'),
            'task_owner' => $request->input('task_owner'),

        ]);
        toast('Your Task Has Created..!!','success');
        return redirect('tasks');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $task = Task::find($id);
        return view('edittask')->with('task',$task);
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
        $task = Task::where('id',$id)
        ->update([
            'task_title' => $request->input('task_title'),
            'task_description' =>  $request->input('task_description'),
            'task_status' => $request->input('task_status'),
            'task_due_date' => $request->input('task_due_date'),
            'task_type' => $request->input('task_type'),
            'task_priority' => $request->input('task_priority'),
        ]);
        toast('Your Task Has Been Updated..!!','success');
        return redirect('tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findorFail($id);
        $task->delete();
        toast('Your Task Has Been Deleted..!!','success');
        return redirect('tasks');
    }

    public function add_task()
    {
        return view('addtask');
    }

    
}
