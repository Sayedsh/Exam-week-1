<?php

class Student {
    // Attributes
    private $name;
    private $grades;

    // Constructor to initialize attributes
    public function __construct($name, $grades) {
        $this->name = $name;
        $this->grades = $grades;
    }

    // Method to calculate average grade
    public function averageGrade() {
        $totalGrades = array_sum($this->grades);
        $numGrades = count($this->grades);
        return $numGrades > 0 ? $totalGrades / $numGrades : 0;
    }

    // Method to display the result
    public function displayResult() {
        $average = $this->averageGrade();
        echo "Student Name: {$this->name}\n";
        echo "Average Grade: {$average}\n";
    }
}

// Example usage
$student = new Student("Alice", [85, 90, 78, 92]);
$student->displayResult();

?>
