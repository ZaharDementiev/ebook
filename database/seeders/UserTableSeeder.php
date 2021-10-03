<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['Zahar', 'zahardementiev@gmail.com', '123045607890z']
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user[0],
                'email' => $user[1],
                'password' => Hash::make($user[2])
            ]);
        }
    }
}
