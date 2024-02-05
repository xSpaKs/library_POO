<?php 

abstract class Media {
    private string $title;
    public int $isCheckedOut = 0;
    private array $ratings = [];

    public function getAverageRating() {
        return array_sum($this->ratings) / count($this->ratings);
    }

    public function toggleCheckOutStatus() {
        $this->isCheckedOut = !$this->isCheckedOut;
    }

    public function addRating($rate) {
        array_push($this->ratings, $rate);
    }

    public function setTitle($title) 
    {
        $this->title = $title;
        return $this->title;
    }

    public function getTitle() {
        return $this->title;
    }
    
    public function setRatings($ratings) 
    {
        $this->ratings = $ratings;
        return $this->ratings;
    }
    
    public function getRatings() {
        return $this->ratings;
    }
}