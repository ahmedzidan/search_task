<?php
header('AMP-Access-Control-Allow-Source-Origin: http://localhost');
$name=$_POST['booksearch'];

$response = array('title' => 'sssssss','description'=>'dddddddddd');
echo json_encode($response);