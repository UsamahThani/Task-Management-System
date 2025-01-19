<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status', 'user_id', 'created_at'];

    protected static function boot() 
    {
        parent::boot();

        static::creating(function ($task) {
            $task->user_id = Session::get('userID');
            $task->created_at = Carbon::now();
            $task->updated_at = null;
        });
    }
}
