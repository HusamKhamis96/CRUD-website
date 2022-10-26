<?php
$index=$_GET["index"];
//fetch data from json
$data = file_get_contents("collection.json");
$data = json_decode($data);
//delete the row with the index
array_splice($data,$index,1);
$data = json_encode($data,JSON_PRETTY_PRINT);
file_put_contents("collection.json",$data);
header("location: show.php");
?>

