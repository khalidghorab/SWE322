<?php

class Courses {
    public $courseCode;
    public $courseName;
    public $courseDescription;
    public $grade;

    // Setters for the classes
    public function setCourseCode($code) {
        $this->courseCode = $code;
    }

    public function setCourseName($name) {
        $this->courseName = $name;
    }

    public function setCourseDescription($description) {
        $this->courseDescription = $description;
    }

    public function setGrade($grade) {
        $this->grade = $grade;
    }
    
    

    // Getters for the classes 
    public function getCourseCode() {
        return $this->courseCode;
    }
    
    public function getCourseName() {
        return $this->courseName;
    }

    public function getCourseDescription() {
        return $this->courseDescription;
    }

    public function getGrade() {
        return $this->grade;
    }
    
    

    // Method to check if the grade is A+
    public function isGradeAPlus() {
        return $this->grade === 'A+';
    }
    

    // Method to return course details
    public function getCourseDetails() {
        return [
            'Course Code' => $this->courseCode,
            'Course Name' => $this->courseName,
            'Course Description' => $this->courseDescription,
            'Grade' => $this->grade
        ];
    }
}


// Create objects for courses

$course1 = new Courses();
$course2 = new Courses();
$course3 = new Courses();  


$course1->setCourseCode('CSE101');
$course1->setCourseName('Introduction to Computer Science');
$course1->setCourseDescription('An introductory course on computer science.');
$course1->setGrade('A+');


$course2->setCourseCode('MAT202');
$course2->setCourseName('Calculus II');
$course2->setCourseDescription('A course on advanced calculus topics.');
$course2->setGrade('B');


$course3->setCourseCode('ENG201');
$course3->setCourseName('Advanced English Writing');
$course3->setCourseDescription('A course on improving writing skills in English.');
$course3->setGrade('A');

// Add the courses to an array
$coursesArray = [$course1, $course2, $course3];


// table style with CSS and to do yellow highlight 
echo '<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border: 1px solid #000;
    }
    tr.highlight {
        background-color: pink;
    }
</style>';

// Print the courses details in an HTML table with CSS
echo '<table>';
echo '<tr><th>Course Code</th><th>Course Name</th><th>Course Description</th><th>Grade</th></tr>';
foreach ($coursesArray as $course) {
    $courseDetails = $course->getCourseDetails();
    $gradeClass = $course->isGradeAPlus() ? 'highlight' : '';

    echo '<tr class="' . $gradeClass . '">';
    echo '<td>' . $courseDetails['Course Code'] . '</td>';
    echo '<td>' . $courseDetails['Course Name'] . '</td>';
    echo '<td>' . $courseDetails['Course Description'] . '</td>';
    echo '<td>' . $courseDetails['Grade'] . '</td>';
    echo '</tr>';
}

echo '</table>';

?>
