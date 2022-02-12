<?php
/*
 * Author: Louie Zhu
 * Date: 2/08/2019
 * Name: student.class.php
 * Description: The Student models a student. The class inherits from the Person class.
 */
class Student extends Person {
	
	//private data members for a student's major and gpa
    private $major, $gpa;

    //constructor
    public function __construct($name, $gender, $major, $gpa)
    {
        parent::__construct($name, $gender);
        $this->major = $major;
        $this->gpa = $gpa;
    }

    //public get methods
    public function getMajor() {
        return $this->major;
    }

    public function getGPA() {
        return $this->gpa;
    }

	//public set methods
    public function setMajor($major) {
        $this->major = $major;
    }

    public function setGPA($gpa) {
        $this->gpa = $gpa;
    }

    public function toString()
    {
        parent::toString(); // TODO: Change the autogenerated stub
        echo "Major: ", $this->getMajor(), "<br>";
        printf("GPA: %.2f<br />", $this->getGPA());
    }
} //end of class
?>
