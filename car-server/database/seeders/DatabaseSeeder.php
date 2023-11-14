<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $permission = Permission::where('name', 'delete')->first();

        if ($permission) {
            // Gán quyền hạn cho vai trò
            $role = Role::find(3); // Thay 1 bằng ID của vai trò cụ thể
            $role->givePermissionTo($permission);
        } else {
            echo "Không tìm thấy quyền hạn có tên là 'edit articles'";
        }
    }
}
