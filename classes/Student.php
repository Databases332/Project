<?php
 
class Student
{
    public $major;
    public $classesTaken;
    public $fullName;
    public $studentId;
    
    function __construct($studentId) {
        $this->$studentId = $studentId;
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $server = $url["host"];
        $username = $url["user"];
        $password = $url["pass"];
        $db = substr($url["path"], 1);
        $conn = new mysqli($server, $username, $password, $db);
        $result = $conn->query("SELECT Student.Name, Major.Name, COUNT(GradeReport.StudentId) AS 'ClassesTaken' FROM Student INNER JOIN GradeReport ON GradeReport.StudentId = Student.StudentId INNER JOIN Major ON Major.MajorId = Student.MajorId WHERE Student.StudentId = " . $studentId . " GROUP BY GradeReport.StudentId;"  );

        $row = mysqli_fetch_array($result);

        $this->$fullName = $row[0];
        $this->$major = $row[1];
        $this->$classesTaken = $row[2];
        
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
    public function getSchedules()
    {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $studentId = $this->$studentId;
        $server = $url["host"];
        $username = $url["user"];
        $password = $url["pass"];
        $db = substr($url["path"], 1);
        $conn = new mysqli($server, $username, $password, $db);
        $result = $conn->query("SELECT ClassName, Time FROM ClassSession INNER JOIN Class ON ClassSession.ClassName = Class.Name INNER JOIN Student ON Student.StudentId = " . $studentId . " WHERE ClassSession.ClassName NOT IN ( SELECT ClassSession.ClassName FROM ClassSession inner join GradeReport ON ClassSession.SessionId = GradeReport.SessionId WHERE GradeReport.StudentId = " . $studentId . "  ) AND ( Student.MajorId = Class.MajorId OR Class.MajorId IS NULL  ) AND ( Class.PreRequisite IS NULL OR Class.PreRequisite IN ( SELECT ClassSession.ClassName FROM ClassSession inner join GradeReport ON ClassSession.SessionId = GradeReport.SessionId inner join Student ON Student.StudentId = " . $studentId . " inner join Class ON (Class.Name = ClassSession.ClassName) WHERE GradeReport.StudentId = Student.StudentId )  ) ORDER BY Time ASC;");
        $classSessions = [];

        $time1 = [];
        $time2 = [];
        $time3 = [];
        $time4 = [];
        $time5 = [];
        $time6 = [];
        while($row = mysqli_fetch_array($result))
        {
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
