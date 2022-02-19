<?php
header("Access-Control-Allow-Origin: *");
header("content-type: application/json");
die(file_get_contents('games.json'));
?>
