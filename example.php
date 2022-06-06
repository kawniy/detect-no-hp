<?php
require_once 'src/detect.php';

$detect = new Detect();
$result = $detect->noTri();

echo $result;