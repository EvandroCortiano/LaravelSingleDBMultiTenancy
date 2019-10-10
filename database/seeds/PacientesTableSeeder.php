<?php

use App\Models\Clinicas;
use Illuminate\Database\Seeder;

class PacientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Tenant::setTenant(Clinicas::find(1));
        factory(\App\Models\Pacientes::class, 3)->create();

        \Tenant::setTenant(Clinicas::find(2));
        factory(\App\Models\Pacientes::class, 2)->create();
    }
}
