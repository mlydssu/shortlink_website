<?php 

require "operate.php";

$query = "SELECT * FROM shorturl.url ORDER BY `no` DESC";
$datatoken = query($query);