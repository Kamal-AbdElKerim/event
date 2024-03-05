<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * List of permissions to add.
     */
    private $permissions = [
        'Dashboard_admin',
        'Add_Category',
        'List_evenements',
    ];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create admin User and assign the role to him.
        $user = User::create([
            'name' => 'Prevail Ejimadu',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'statue' => 1
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

        $organizerPermissions = [
            'Dashboard_Organisateur',
            'Add_Events',
            'List_reservations',
        ];

        foreach ($organizerPermissions as $organizerPermission) {
            Permission::create(['name' => $organizerPermission]);
        }

        $organizerRole = Role::create(['name' => 'Organisateur']);
        $organizerPermissionsToAssign = Permission::whereIn('name', $organizerPermissions)->pluck('id')->toArray();
        $organizerRole->syncPermissions($organizerPermissionsToAssign);
    }
}
