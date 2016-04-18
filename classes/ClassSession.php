<?php
 
class ClassSession
{
    public  $ClassName;
    public  $Time;
    public  $SessionId;
    
    function __construct($Id) {
        $connection = mysqli_connect( "root", "password", "scheduler" );

        $result = mysqli_connect($connection, "SELECT TOP 1 * FROM ClassSession WHERE SessionId = " + $Id);

        while($row = mysqli_fetch_array($result))
        {
            $this->ClassName = $row['ClassName'];
            $this->Time = $row['Time'];
            $this->SessionId = $row['SessionId'];
        }
    }
    public function getClassName()
    {
        return $this->className;
    }  
    public function getMajorId()
    {
        return $this->majorId;
    } 
    public static function addClass($majorId,$name)
    {
        
    }

    
}
