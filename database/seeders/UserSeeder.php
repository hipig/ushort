<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'name' => 'Administrator',
            'email' => 'admin@ushort.test',
            'password' => 'password',
        ]);
        $user->role = User::SUPER_ADMIN_ROLE;

        $user->save();

        $user->markEmailAsVerified();
    }
}
