<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'title',
        'permissions',
        'status'
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_permission');
    }
}
