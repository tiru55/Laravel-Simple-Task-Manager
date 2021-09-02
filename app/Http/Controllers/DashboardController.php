<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
       
        $total_tasks = Task::where('task_owner','=',Auth::user()->first_name)->get();
        return  view('dashboard',[
            'total_tasks' => $total_tasks 
        ]);
        
    }
}
