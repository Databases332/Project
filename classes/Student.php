<?php
 
class Student
{
    private $major;
    private $majorClasses;
    private $classesTaken;
    private $fullName;
    
    function __construct($studentId) {
        
    }
    public function majorClassesRequired()
    {
        return $this->majorClasses;
    } 
    public function majorClassesTaken()
    {
        return $this->classesTaken;
    }
    public function getMajor()
    {
        return $this->major;
    } 
    public function getName()
    {
        return $this->fullName;
    }
    public static function addStudent($firstName,$lastName,$major)
    {
        
    }
    
}
