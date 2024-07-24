<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Cria a Role de Admin, e suas permissões vinculadas
        $admin = Role::firstOrCreate(
            ['name' => 'admin', 'guard_name' => 'web']
        );
        $admin->syncPermissions([
            'access_panel', 
            'user_read', 
            'user_create',
            'user_update',
            'user_delete',
            'permission_read',
            'permission_create',
            'permission_update',
            'permission_delete',
            'role_read',
            'role_create',
            'role_update',
            'role_delete']);

        //Cria a Role de Manager, e suas permissões vinculdas
        $manager = Role::firstOrCreate(
            ['name' => 'manager', 'guard_name' => 'web']
        );
        $manager->syncPermissions([
            'access_panel', 
            'user_read', 
            'user_create',
            'user_update',
            'user_delete'
        ]);

        //Cria a Role de User com suas permissões vinculadas
        $user = Role::firstOrCreate(
            ['name' => 'simple_user', 'guard_name' => 'web']
        );
        $user->syncPermissions(['access_panel']);        
    }
}
