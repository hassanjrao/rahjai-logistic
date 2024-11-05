<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::updateOrCreate([
            'id' => 1
        ],[
            'id' => 1,
            'twitter' => 'https://twitter.com',
            'facebook' => 'https://facebook.com',
            'instagram' => 'https://instagram.com',
            'linkedin' => 'https://linkedin.com',
            'youtube' => 'https://youtube.com',
            'address' => '123 Main Street, New York, NY 10030',
            'phone' => '+1234567890',
            'email' => 'test@m.com',
        ]);
    }
}
