<?php
//session_start();
$server='localhost';
$pass="";
$username="root";
$db="ten";

$path="";
function sanitizeInput($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data; 
}