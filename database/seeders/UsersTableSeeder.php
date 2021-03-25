<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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

        $adminRole = Role::where('name','admin')->first();
        $authorRole = Role::where('name','author')->first();
        $userRole = Role::where('name','user')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin45@gmail.com',
            'password' => Hash::make('11223344')
        ]);

        $author = User::create([
            'name' => 'Author User',
            'email' => 'author45@gmail.com',
            'password' => Hash::make('11223344')
        ]);

        $user = User::create([
            'name' => 'Generic User',
            'email' => 'user45@gmail.com',
            'password' => Hash::make('11223344')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
