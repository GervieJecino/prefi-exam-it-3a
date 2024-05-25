<?php

class StudentFactory
{
    public static function create($count = 1)
    {
        $students = [];

        for ($i = 0; $i < $count; $i++) {
            $student = [
                'firstname' => self::generateFirstname(),
                'lastname' => self::generateLastname(),
                'birthdate' => self::generateBirthdate(),
                'sex' => self::generateSex(),
                'address' => self::generateAddress(),
                'year' => self::generateYear(),
                'course' => self::generateCourse(),
                'section' => self::generateSection(),
            ];

            $students[] = $student;
        }

        return $students;
    }

    private static function generateFirstname()
    {
        $firstnames = ['John', 'Jane', 'Michael', 'Emma', 'David', 'Sarah', 'Daniel', 'Emily', 'Christopher', 'Olivia'];
        return $firstnames[array_rand($firstnames)];
    }

    private static function generateLastname()
    {
        $lastnames = ['Smith', 'Johnson', 'Williams', 'Brown', 'Jones', 'Miller', 'Davis', 'Garcia', 'Rodriguez', 'Wilson'];
        return $lastnames[array_rand($lastnames)];
    }

    private static function generateBirthdate()
    {
        return date('Y-m-d', mt_rand(strtotime('1950-01-01'), strtotime('2005-12-31')));
    }

    private static function generateSex()
    {
        return mt_rand(0, 1) ? 'MALE' : 'FEMALE';
    }

    private static function generateAddress()
    {
        $cities = ['Tacloban', 'Ormoc', 'Baybay', 'Calbayog', 'Maasin', 'Borongan', 'Hilongos', 'Palo', 'Tanauan', 'Abuyog'];
        return $cities[array_rand($cities)];
    }
    
    private static function generateYear()
    {
        return mt_rand(1, 5);
    }

    private static function generateCourse()
    {
        $courses = ['BSIT', 'BSCS', 'BSBA', 'BSHRM', 'BSECE', 'BSPSY', 'BSN', 'BSCrim', 'BSME', 'BSCE'];
        return $courses[array_rand($courses)];
    }

    private static function generateSection()
    {
        $sections = ['A', 'B', 'C', 'D', 'E'];
        return $sections[array_rand($sections)];
    }
}

// Example usage:
$students = StudentFactory::create(10);
print_r($students);
