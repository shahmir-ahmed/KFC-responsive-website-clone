<?php

$name
$email
$number
$message

$dbcon = mysqli_connect('localhost', 'root', '', 'DBFood');

$query = "Insert into tbl_order(,,,,) values(".$name.",".$email.",".$number.", ".$message.")";

mysqli_query($dbcon, $query);

header("location: index.html");

?>