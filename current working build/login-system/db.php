<?php
/* Database connection settings */
$host = 'localhost';
$user = 'iggy';
$pass = 'Dilligaf12';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
