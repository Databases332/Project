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
    public function getSchedules()
    {
        $connection = mysqli_connect("root", "password", "Scheduler", "20");

        $result = mysqli_query($connection, "CALL getAvailableClasses");
        $classSessions = [];

        $time1 = [];
        $time2 = [];
        $time3 = [];
        $time4 = [];
        $time5 = [];
        $time6 = [];

        while($row = mysqli_fetch_array($result))
        {
            $classSessionId = $row[0];
            $classSession = new Session($classSessionId);
            switch($classSession->{$Time})
            {
                case 1:
                    array_push($time1, $classSession);
                    break;
                case 2:
                    array_push($time2, $classSession);
                    break;
                case 3:
                    array_push($time3, $classSession);
                    break;
                case 4:
                    array_push($time4, $classSession);
                    break;
                case 5:
                    array_push($time5, $classSession);
                    break;
                case 6:
                    array_push($time6, $classSession);
                    break;
            }
            array_push($classSessions, $classSession);
        }
        $schedules = [];
        $schedule = [];

        #TODO GENERATE SCHEDULE LIST
        #while(true)
        #{
        #    for( $i = 0; $i<6; $i++ )
        #    {
        #        
        #    }
        #}
    }
    public static function addStudent($firstName,$lastName,$major)
    {
        
    }
    
}
