<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = ['name', 'due_date','state','created_at','updated_at'];

    protected $guarded = ['id'];

}
