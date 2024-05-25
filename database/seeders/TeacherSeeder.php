<?php

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        $numberOfTeachers = 10;

        for ($i = 0; $i < $numberOfTeachers; $i++) {
            $teacherData = [
                'firstname' => $this->generateFirstname(),
                'lastname' => $this->generateLastname(),
                'birthdate' => $this->generateBirthdate(),
                'sex' => $this->generateSex(),
                'address' => $this->generateAddress(),
                'subject' => $this->generateSubject(),
                'years_of_experience' => mt_rand(1, 30),
            ];

            Teacher::create($teacherData);
        }
    }

    private function generateFirstname()
    {
        $firstnames = ['Juan', 'Maria', 'Pedro', 'Ana', 'Jose', 'Carmen', 'Miguel', 'Luz', 'Ricardo', 'Sofia'];
        return $firstnames[array_rand($firstnames)];
    }

    private function generateLastname()
    {
        $lastnames = ['Garcia', 'Rodriguez', 'Fernandez', 'Lopez', 'Martinez', 'Perez', 'Gonzalez', 'Sanchez', 'Ramirez', 'Torres'];
        return $lastnames[array_rand($lastnames)];
    }

    private function generateBirthdate()
    {
        return date('Y-m-d', mt_rand(strtotime('1950-01-01'), strtotime('2005-12-31')));
    }

    private function generateSex()
    {
        return mt_rand(0, 1) ? 'MALE' : 'FEMALE';
    }

    private function generateAddress()
    {
        $cities = ['Manila', 'Quezon City', 'Cebu City', 'Davao City', 'Caloocan', 'Zamboanga City', 'Taguig', 'Antipolo', 'Pasig', 'Cagayan de Oro'];
        return $cities[array_rand($cities)];
    }

    private function generateSubject()
    {
        $subjects = ['Mathematics', 'English', 'Science', 'History', 'Computer Science', 'Physics', 'Biology', 'Chemistry', 'Geography', 'Art'];
        return $subjects[array_rand($subjects)];
    }
}
