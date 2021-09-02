<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $primaryKey = 'id';

    public $incrementing = false; 

    protected $fillable = ['id','task_title','task_description','task_status','task_due_date','task_type','task_priority','task_owner'];
}
