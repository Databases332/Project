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
    private function combinations ($arrays, $i = 0)
    {
        if(!isset($arrays[$i]))
        {
            return array();
        }
        if($i == count($arrays) - 1)
        {
            return $arrays[$i];
        }

        $tmp = $this->combinations($arrays, $i + 1);

        $result = array();

        foreach ($arrays[$i] as $v)
        {
            foreach($tmp as $t)
            {
                $result[] = is_array($t) ?
                    array_merge(array($v), $t) :
                    array($v, $t);
            }
        }

        return $result;
    }
    public function getSchedules()
    {
        #$connection = mysqli_connect("root", "password", "Scheduler", "20");

        #$result = mysqli_query($connection, "CALL getAvailableClasses");
        $classSessions = [];

        #temp variables
        $time1 = [39,45,33];
        $time2 = [40,46,26,34];
        $time3 = [41,47,27,35];
        $time4 = [42,48,28];
        $time5 = [37,29];
        $time6 = [38,30];

        #while($row = mysqli_fetch_array($result))
        #{
        #    $classSessionId = $row[0];
        #    $classSession = new Session($classSessionId);
        #    switch($classSession->{$Time})
        #    {
        #        case 1:
        #            array_push($time1, $classSession);
        #            break;
        #        case 2:
        #            array_push($time2, $classSession);
        #            break;
        #        case 3:
        #            array_push($time3, $classSession);
        #            break;
        #        case 4:
        #            array_push($time4, $classSession);
        #            break;
        #        case 5:
        #            array_push($time5, $classSession);
        #            break;
        #        case 6:
        #            array_push($time6, $classSession);
        #            break;
        #    }
        #    array_push($classSessions, $classSession);
        #}
        $schedules = $this->combinations (
            array(
                $time1,
                $time2,
                $time3,
                $time4,
                $time5,
                $time6
            )
        );
        #print_r($schedules)
        return $schedules;
    }
    public static function addStudent($firstName,$lastName,$major)
    {
        
    }
    
}
