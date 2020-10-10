<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTodo extends Model
{
   protected $table = 'todos';
   protected $fillable = ['name'];
}
