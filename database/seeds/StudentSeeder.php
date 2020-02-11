<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Student::create([
        	'nama' => 'nengkarina',
        	'jk' => 'p'
        ]);

         \App\Student::create([
        	'nama' => 'Ayah',
        	'jk' => 'L'
        ]);
    }
}
