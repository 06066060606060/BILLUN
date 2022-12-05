<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class SettingsSeeder extends Seeder
{

    public function run()
    {
        Settings::firstOrCreate(
            ['id' => 1],
            ['request' => '0', 'id' => 1]);
       
    }
}
