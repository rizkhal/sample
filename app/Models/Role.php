<?php

namespace App\Models;

use Spatie\Permission\Contracts\Role as RoleContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as SpatieRole;


class Role extends SpatieRole implements RoleContract
{
    use HasFactory;

    public function roleType()
    {
        return $this->belongsTo(RoleType::class, 'id', 'role_id');
    }
}
