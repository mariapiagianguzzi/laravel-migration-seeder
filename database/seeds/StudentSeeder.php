<?php
use App\Student;
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
        $students = [
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
            
        ];


        foreach ($students as $student) {
            $newStudent = new Student();
            $newStudent->name = $student['name'];
            $newStudent->lastname = $student['lastname'];
            $newStudent->save();
        }
    }
}