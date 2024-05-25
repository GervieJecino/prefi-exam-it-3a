<?php

class TeacherFactory
{
    public static function create($count = 1)
    {
        $teachers = [];

        for ($i = 0; $i < $count; $i++) {
            $teacher = [
                'firstname' => self::generateFirstname(),
                'lastname' => self::generateLastname(),
                'birthdate' => self::generateBirthdate(),
                'sex' => self::generateSex(),
                'address' => self::generateAddress(),
                'subject' => self::generateSubject(),
                'years_of_experience' => mt_rand(1, 30),
            ];

            $teachers[] = $teacher;
        }

        return $teachers;
    }

    private static function generateFirstname()
    {
        $firstnames = ['Juan', 'Maria', 'Pedro', 'Ana', 'Jose', 'Carmen', 'Miguel', 'Luz', 'Ricardo', 'Sofia'];
        return $firstnames[array_rand($firstnames)];
    }

    private static function generateLastname()
    {
        $lastnames = ['Garcia', 'Rodriguez', 'Fernandez', 'Lopez', 'Martinez', 'Perez', 'Gonzalez', 'Sanchez', 'Ramirez', 'Torres'];
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
        $cities = ['Manila', 'Quezon City', 'Cebu City', 'Davao City', 'Caloocan', 'Zamboanga City', 'Taguig', 'Antipolo', 'Pasig', 'Cagayan de Oro'];
        return $cities[array_rand($cities)];
    }

    private static function generateSubject()
    {
        $subjects = ['Mathematics', 'English', 'Science', 'History', 'Computer Science', 'Physics', 'Biology', 'Chemistry', 'Geography', 'Art'];
        return $subjects[array_rand($subjects)];
    }
}

// Example usage:
$teachers = TeacherFactory::create(10);
print_r($teachers);

?>
