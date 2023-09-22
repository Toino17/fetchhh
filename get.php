<?php 
require_once 'Class/DbConnect.php';

$resultAll = $db->all();
$resultJson = json_encode($resultAll);


echo($resultJson);
