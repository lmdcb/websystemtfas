<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'created_at'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
