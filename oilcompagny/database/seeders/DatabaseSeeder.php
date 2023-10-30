<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

/*        User::create([
            'ids' => 124,
            'firstname' => 'Raphael',
            'lastname' => 'Tax',
            'email' => 'raphtnt@gmail.com',
            'numtel' => '0738438002',
            'password' => Hash::make('toor'),
        ]);

         \App\Models\User::factory(250)
             ->create();

        $role = Role::create(['name' => '*']);

        $permission = Permission::create(['name' => 'interim']);
        $role->givePermissionTo($permission);
        $permission->assignRole($role);

        $permission2 = Permission::create(['name' => 'stats']);
        $role->givePermissionTo($permission2);
        $permission2->assignRole($role);*/


        $user = User::findOrFail(1);
        $role = Role::findByName("*");
        $user->assignRole($role);

    }
}
