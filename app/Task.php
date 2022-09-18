<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];

    // optional if not remember all fields
    // protected $guarded = [];
}
