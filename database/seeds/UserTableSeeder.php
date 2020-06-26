<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $companyRole = Role::where('name', 'company')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => hash::make('password'),
        ]);

        $company = User::create([
            'name' => 'Company User',
            'email' => 'company@company.com',
            'password' => hash::make('password')
        ]);
        $user = User::create([
            'name' => 'Generic User',
            'email' => 'user@user.com',
            'password' => hash::make('password')
        ]);

        $admin->roles()->attach($adminRole);
        $company->roles()->attach($companyRole);
        $user->roles()->attach($userRole);

    }
}
