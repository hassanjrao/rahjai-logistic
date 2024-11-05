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
        User::updateOrCreate([
            'id' => 1
        ],[
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@m.com',
            'password' => bcrypt('password'),
        ]);
    }
}
