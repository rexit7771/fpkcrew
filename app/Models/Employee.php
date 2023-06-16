<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    // use SoftDeletes;

    protected $table = "employees";

    protected $fillable = [
        'nik', 'nama', 'divisi', 'departemen', 'grade'
    ];

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}
