<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'email',
        'contactNumber',
        'password',
        'container1',
        'container2',
        'container3',
        'container4',
    ];
    protected $hidden = [
        'password',
    ];
    protected $primaryKey = 'userID';

}
