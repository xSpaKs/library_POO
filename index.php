<?php

include "Models/Album.php";
include "Models/Book.php";
include "Models/Movie.php";

$auDD = new Song("Au dd", "PNL", 180);
$shenmue = new Song("Shenmue", "PNL", 196);
$pnl = new Artist("PNL");
$twoBrothers = new Album($pnl, '2 frères', [$auDD, $shenmue]);

print_r($twoBrothers->getSongs());


