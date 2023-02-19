<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;
    protected $fillable = [
        'userID',
        'container1',
        'container2',
        'container3',
        'container4',
    ];
}
