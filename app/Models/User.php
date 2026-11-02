<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'full_name',
        'email',
        'role',
        'status',
        'created_at'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
