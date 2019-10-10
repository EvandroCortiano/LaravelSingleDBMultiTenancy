<?php

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
        $this->call(ClinicasTableSeeder::class);
        $this->call(PacientesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
