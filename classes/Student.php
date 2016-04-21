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

        $tmp = Student::combinations($arrays, $i + 1);

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
    public function getSchedules($studentId)
    {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

        $server = $url["host"];
        $username = $url["user"];
        $password = $url["pass"];
        $db = substr($url["path"], 1);
        $conn = new mysqli($server, $username, $password, $db);
        #$connection = mysqli_connect("root", "password", "Scheduler", "20");
        $result = $conn->query("SELECT ClassName, Time FROM ClassSession INNER JOIN Class ON ClassSession.ClassName = Class.Name INNER JOIN Student ON Student.StudentId = "+$studentId+" WHERE ClassSession.ClassName NOT IN ( SELECT ClassSession.ClassName FROM ClassSession inner join GradeReport ON ClassSession.SessionId = GradeReport.SessionId WHERE GradeReport.StudentId = "+$studentId+"  ) AND ( Student.MajorId = Class.MajorId OR Class.MajorId IS NULL  ) AND ( Class.PreRequisite IS NULL OR Class.PreRequisite IN ( SELECT ClassSession.ClassName FROM ClassSession inner join GradeReport ON ClassSession.SessionId = GradeReport.SessionId inner join Student ON Student.StudentId = "+$studentId+" inner join Class ON (Class.Name = ClassSession.ClassName) WHERE GradeReport.StudentId = Student.StudentId )  ) ORDER BY Time ASC;");
        $classSessions = [];
        #temp variables
        #$time1 = [39,45,33];
        #$time2 = [40,46,26,34];
        #$time3 = [41,47,27,35];
        #$time4 = [42,48,28];
        #$time5 = [37,29];
        #$time6 = [38,30];

        $time1 = [];
        $time2 = [];
        $time3 = [];
        $time4 = [];
        $time5 = [];
        $time6 = [];
        while($row = mysqli_fetch_array($result))
        {
            #print_r($row);    
            $className = $row[0];
            $time = $row[1];
            switch($time)
            {
                case 1:
                    array_push($time1, $className);
                    break;
                case 2:
                    array_push($time2, $className);
                    break;
                case 3:
                    array_push($time3, $className);
                    break;
                case 4:
                    array_push($time4, $className);
                    break;
                case 5:
                    array_push($time5, $className);
                    break;
                case 6:
                    array_push($time6, $className);
                    break;
            }
            array_push($classSessions, $classSession);
        }
        $schedules = Student::combinations (
            array(
                $time1,
                $time2,
                $time3,
                $time4,
                $time5,
                $time6
            )
        );
        shuffle($schedules);
        return $schedules;
    }
    public static function addStudent($firstName,$lastName,$major)
    {
        
    }
    
}
