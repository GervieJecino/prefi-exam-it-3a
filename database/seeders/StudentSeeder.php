<?php

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $count = 10;

        for ($i = 0; $i < $count; $i++) {
            $studentData = [
                'firstname' => $this->generateName(['Juan', 'Maria', 'Jose', 'Ana', 'Pedro', 'Rosa', 'Miguel', 'Sofia', 'Carlos', 'Carmen']),
                'lastname' => $this->generateName(['Santos', 'Reyes', 'Cruz', 'Garcia', 'Torres', 'Lopez', 'Morales', 'Flores', 'Delos Santos', 'Castillo']),
                'birthdate' => $this->generateDate('1950-01-01', '2005-12-31'),
                'sex' => $this->generateSex(),
                'address' => $this->generateAddress(),
                'year' => mt_rand(1, 5),
                'course' => $this->generateCourse(),
                'section' => $this->generateSection(),
            ];

            Student::create($studentData);
        }
    }

    private function generateName($names)
    {
        return $names[array_rand($names)];
    }

    private function generateDate($startDate, $endDate)
    {
        return date('Y-m-d', mt_rand(strtotime($startDate), strtotime($endDate)));
    }

    private function generateSex()
    {
        return mt_rand(0, 1) ? 'MALE' : 'FEMALE';
    }

    private function generateAddress()
    {
        $cities = ['Tacloban', 'Ormoc', 'Baybay', 'Maasin', 'Catbalogan', 'Calbayog', 'Borongan', 'Abuyog', 'Carigara', 'Kananga'];
        return $cities[array_rand($cities)] . ', Leyte';
    }

    private function generateCourse()
    {
        $courses = ['BSIT', 'BSCS', 'BSBA', 'BSHRM', 'BSECE', 'BSPSY', 'BSN', 'BSCrim', 'BSME', 'BSCE'];
        return $courses[array_rand($courses)];
    }

    private function generateSection()
    {
        $sections = ['A', 'B', 'C', 'D', 'E'];
        return $sections[array_rand($sections)];
    }
}
