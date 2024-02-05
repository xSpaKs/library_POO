<?php 

require_once("Media.php");

class Movie extends Media 
{    
    private string $director;
    private int $runTime;

    function __construct($title, $director, $runTime) {
        $this->setTitle($title);
        $this->setDirector($director);
        $this->setRunTime($runTime);
    }

    public function setDirector($director) 
    {
        $this->director = $director;
        return $this->director;
    }

    public function getDirector() {
        return $this->director;
    }

    public function setRunTime($runTime) 
    {
        $this->runTime = $runTime;
        return $this->runTime;
    }

    public function getRunTime() {
        return $this->runTime;
    }
}