<?php
 
class ClassesSchedule
{
    private $fromTime;
    private $toTime;
    private $days;
    
    function __construct($classId) {
        
    }
    public function getFromTime()
    {
        return $this->fromTime;
    }  
    public function getToTime()
    {
        return $this->toTime;
    }  
    public function getDays()
    {
        return $this->days;
    }   
    public static function addClassTimes($fromTime,$toTime,$days)
    {
        
    }

    
}

     