<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('permissions')->insert([
            [
                'name' => "access_panel",
                'guard_name' => "web",
            ],
            [
                'name' => "user_read",
                'guard_name' => "web",
            ],
            [
                'name' => "user_create",
                'guard_name' => "web",
            ],
            [
                'name' => "user_update",
                'guard_name' => "web",
            ],
            [
                'name' => "user_delete",
                'guard_name' => "web",
            ],
            [
                'name' => "role_read",
                'guard_name' => "web",
            ],
            [
                'name' => "role_create",
                'guard_name' => "web",
            ],
            [
                'name' => "role_update",
                'guard_name' => "web",
            ],
            [
                'name' => "role_delete",
                'guard_name' => "web",
            ],
            [
                'name' => "permission_read",
                'guard_name' => "web",
            ],
            [
                'name' => "permission_create",
                'guard_name' => "web",
            ],
            [
                'name' => "permission_update",
                'guard_name' => "web",
            ],
            [
                'name' => "permission_delete",
                'guard_name' => "web",
            ],
        ]);        
    }
}
