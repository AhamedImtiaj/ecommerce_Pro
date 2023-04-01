<?php

use Database\Seeders\AdminsTableSeeder;
use Database\Seeders\AttributesTableSeeder;
use Database\Seeders\CategoriesTableSeeder;
use Database\Seeders\SettingsTableSeeder;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
    }
    
}
