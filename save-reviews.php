<?php

include "config.php";

$reviews=json_decode(file_get_contents("reviews.json"),true);

if(!$reviews){
$reviews=[];
}

$newReview=[

"name"=>trim($_POST['name']),
"rating"=>$_POST['rating'],
"message"=>trim($_POST['message'])

];

$reviews[]=$newReview;

file_put_contents(
"reviews.json",
json_encode($reviews,JSON_PRETTY_PRINT)
);

header("Location:reviews.php");

?>