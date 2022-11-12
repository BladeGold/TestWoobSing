<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permissions extends Model
{
    use HasFactory;

    protected $fillable = [
        'permission',
    ];

    //* Relaciones en modelo Permissions
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'permission_roles', 'permission_id', 'role_id');
    }
}
