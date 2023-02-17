<?php
include_once __DIR__ . '/Genre.php';

class Movie
{
    public $title;
    public $rate;
    public $img;
    public $type;



    public function __construct($_title, $_rate, $_img,  $genre = 'action')
    {
        $this->title = $_title;
        $this->rate = $_rate;
        $this->img = $_img;
        $this->type = $genre;
    }
}
