<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name','slug'];

    public static function guest()
    {
        return Role::where('slug', 'guest')->first();
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
    public function hasAccessToRoute($name)
    {
        foreach ($this->permissions as $perm) {
            if ($perm->name == $name) {
                return true;
            }
        }
        return false;
    }
}
