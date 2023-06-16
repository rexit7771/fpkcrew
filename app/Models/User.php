<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";

    protected $fillable = [
        'email', 'password'
    ];

    public function employee()
    {
        return $this->belongsTo('App\Models\Employee');
    }
}
