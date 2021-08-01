<?php

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Config::insert([
            ['name' => 'site_name', 'value' => 'Demo Blog'],
            ['name' => 'site_title', 'value' => 'Demo Blog'],
            ['name' => 'copyright_owner', 'value' => 'Demo Blog'],
            ['name' => 'admin_email', 'value' => 'pxs@amazon.com'],
        ]);
    }
}
