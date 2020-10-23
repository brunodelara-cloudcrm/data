<?php
$lat = $_POST['lat'];
$lon = $_POST['lon'];

$data = array($lat, $lon, $_SERVER['REMOTE_ADDR']);

$a = file_get_contents("a.txt");

$list = explode("\n", $a);

$list[] = implode(', ', $data);

file_put_contents("a.txt", implode("\n", $list));