<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'date',
        'notes',
        'is_new_task',
        'contact_ID',
        'created_by_ID'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function contacts()
    {
        return $this->belongsTo('App\Contact');
    }
}
