<?php

use App\Models\Clinicas;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Tenant::setTenant(Clinicas::find(1));
        factory(\App\Models\User::class, 1)
            ->create([
                'email' => 'user1@user.com',
            ]);

        \Tenant::setTenant(Clinicas::find(2));
        factory(\App\Models\User::class, 1)
            ->create([
                'email' => 'user2@user.com',
            ]);
    }
}
