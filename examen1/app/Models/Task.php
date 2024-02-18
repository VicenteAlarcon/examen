<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Type;
class Task extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
        'date',
    ];

  // Relaciones //

  public function users()
  {
    return $this->belongsToMany(User::class, 'task_user', 'task_id', 'user_id');
  }

  public function type()
  {
    return $this->belongTo(Type::class);
  }


}
