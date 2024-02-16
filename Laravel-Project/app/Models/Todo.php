<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'completed'];

    // Define relationship if Todo belongs to TodoList
    public function todoList()
    {
        return $this->belongsTo(TodoList::class);
    }
}
