<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','description'];

    public function roles()
    {
        return $this->belongsToMnay(Role::class);
    }
}
