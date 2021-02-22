<?php
use App\Student;
use Faker\Generator as Faker;
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
      /*   $students = [
            [
                'name' => 'Angela',
                'lastname' => 'Gallo',
            ],
            [
                'name' => 'Andrea',
                'lastname' => 'Di Cataldi',
            ],
            [
                'name' => 'Raffaele',
                'lastname' => 'Baldassarre',
            ],
            
        ]; */
        $students = config('stud');



        foreach ($students as $student) {
            $newStudent = new Student();
            $newStudent->name = $student['name'];
            $newStudent->lastname = $student['lastname'];
            $newStudent->save();
        }
        for ($i = 0; $i < 3; $i++) {
            $newStudent = new Student();
            $newStudent->name = $faker->word();
            $newStudent->lastname = $faker->word();
            $newStudent->save();
        }
    }
}