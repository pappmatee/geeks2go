<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Nip\Profile\Database\Seeders\UserSeeder;
use Nip\Role\Database\Seeders\RoleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
}
