<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {
            $student = new Student();
            $student->name = $faker->firstname;
            $student->lastname = $faker->lastname;
            $student->email = $faker->email;
            $student->registration_number = $faker->randomNumber(8);
            $student->save();
        }
    }
}
