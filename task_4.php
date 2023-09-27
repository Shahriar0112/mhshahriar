<?php 
$studentGrades = [
    "Student 1" => ['Math' => 80, 'English' => 70, 'Science' => 60],
    "Student 2" => ['Math' => 58, 'English' => 85, 'Science' => 70],
    "Student 3" => ['Math' => 75, 'English' => 75, 'Science' => 90],
];

function calculateAverageGrade($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        $numberOfSubjects = count($grades);
        $totalGrades = array_sum($grades);
        $averageGrade = $totalGrades / $numberOfSubjects;
        echo "{$student} average Grade: {$averageGrade}\n";
    }
}
calculateAverageGrade($studentGrades);