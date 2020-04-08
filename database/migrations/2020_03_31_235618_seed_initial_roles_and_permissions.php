<?php

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Migrations\Migration;

class SeedInitialRolesAndPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $roles = [
            'user',
            'editor',
            'admin',
            'super-admin',
        ];

        $permissions = [
            // Packages
            'submit packages',
            'submit multiple packages',
            'delete owned packages',

            // Favorites
            'favorite packages',
            'favorite templates',

            // Admin
            'delete any user',
            'delete any package',
            'delete any template',
            'view telescope',
            'view nova',
        ];

        // Create permssions
        collect($permissions)->each(function ($permission) {
            Permission::create(['name' => $permission]);
        });

        // Create Roles
        collect($roles)->each(function ($role) {
            Role::create(['name' => $role]);
        });
    }
}
