<?php
include ('functions.php');
$db = include ('dataBase/start.php');
$db->delete('posts',$_GET['id']);
header(  'location: index.php');
