<?php 

require_once("Media.php");
require_once("Song.php");
require_once("Artist.php");

class Album extends Media 
{
    private Artist $artist;
    private array $songs;

    function __construct($artist, $title, $songs) {
        $this->setTitle($title);
        $this->setArtist($artist);
        $this->setSongs($songs);
    }

    public function setArtist($artist) 
    {
        $this->artist = $artist;
        return $this->artist;
    }

    public function getArtist() {
        return $this->artist;
    }

    public function setSongs($songs) 
    {
        $this->songs = $songs;
        return $this->songs;
    }
    
    public function getSongs() {
        return $this->songs;
    }
}