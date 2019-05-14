<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    public function index()
    {
        return view('admin.permissions', ['roles' => Role::with('permissions')->get(), 'permissions' => Permission::orderBy('name')->get()]);
    }

    public function store(Request $request)
    {
        $rolePermissions = [];
        $values = $request->all();
        foreach ($values as $key => $val) {
            if ($key == '_token') {
                continue;
            }
            $pairs = explode(',', $key);
            $rolePermissions[] = ['permission_id' => $pairs[0], 'role_id' => $pairs[1]];
        }

        DB::table('permission_role')->truncate();
        DB::table('permission_role')->insert($rolePermissions);
        return redirect()->route('admin.permissions.index')->with('success', 'مجوزهای دسترسی ذخیره شد.');
    }
}
