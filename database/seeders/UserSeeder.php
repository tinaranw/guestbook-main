<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'tinaraadmin@gmail.com';
        $user->password = Hash::make('tidar123');
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->name = 'Creator';
        $user->email = 'tinaracreator@gmail.com';
        $user->password = Hash::make('tidar123');
        $user->role_id = 2;
        $user->save();

        $user = new User();
        $user->name = 'Normal';
        $user->email = 'tinaranormal@gmail.com';
        $user->password = Hash::make('tidar123');
        $user->role_id = 3;
        $user->save();
    }
}
