<?php

use Illuminate\Database\Seeder;

class ClinicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Clinicas::create([
            'name' => 'Pró-Renal'
        ]);

        \App\Models\Clinicas::create([
            'name' => 'Instituto do Rim'
        ]);
    }
}
