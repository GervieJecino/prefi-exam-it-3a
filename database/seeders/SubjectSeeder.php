<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    public function run()
    {
        $count = 10;

        for ($i = 0; $i < $count; $i++) {
            $subjectData = [
                'subject_code' => 'T3B-123',
                'name' => 'Application Lifecyle Management',
                'description' => 'Lorem ipsum dolor sit amet.',
                'instructor' => 'Mr. John Doe',
                'schedule' => 'MW 7AM-12PM',
                'grades' => [
                    'prelims' => 2.75,
                    'midterms' => 2.0,
                    'pre_finals' => 1.75,
                    'finals' => 1.0
                ],
                'average_grade' => 1.87,
                'remarks' => 'PASSED',
                'date_taken' => '2024-01-01',
            ];

            Subject::create($subjectData);
        }
    }
}
