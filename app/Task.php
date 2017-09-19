<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'task_title',
        'task_desc',
        'task_due_time',
        'task_created_time',
        'contact_ID',
        'created_by_ID'
    ];

    public function contacts()
    {
        return $this->belongsToMany('App\Contact', 'contacts_tasks', 'task_ID', 'contact_ID');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'tasks_users', 'task_ID', 'user_ID');
    }
}
