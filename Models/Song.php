<?php

class Song {
    private string $artist;
    private string $title;
    private int $runTime;

    function __construct($title, $artist)
    {
        $this->title = $title;
        $this->artist = $artist;
    }

    public function setArtist($artist) 
    {
        $this->artist = $artist;
        return $this->artist;
    }

    public function getArtist() {
        return $this->artist;
    }

    public function setTitle($title) 
    {
        $this->title = $title;
        return $this->title;
    }

    public function getTitle() {
        return $this->title;
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