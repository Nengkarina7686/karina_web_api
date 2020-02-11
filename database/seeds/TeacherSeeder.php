<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Student::create([
        	'nama' => 'Pak Akmal',
        	'jk' => 'L'
        ]);

         \App\Student::create([
        	'nama' => 'Ibu Intan',
        	'jk' => 'P'
        ]);
    }
}
