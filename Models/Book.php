<?php 

require_once("Media.php");

class Book extends Media
{
    private string $author;
    private int $pages;

    function __construct($title, $author, $pages) {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPages($pages);
    }

    public function setAuthor($author) 
    {
        $this->author = $author;
        return $this->author;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setPages($pages) 
    {
        $this->pages = $pages;
        return $this->pages;
    }

    public function getPages() {
        return $this->pages;
    }

}