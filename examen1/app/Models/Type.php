<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Task;

class Type extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'colour',
        'model',
    ];

 // Relación uno a muchos con Task

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    // Relación uno a muchos con User

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
