<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'teacher']);
        $role3 = Role::create(['name' => 'student']);
        $users = \App\User::all();
        foreach ($users as $u)
        {
            $u->assignRole(['admin', 'teacher']);
        }

    }
}
