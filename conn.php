<?php
$mysqli = new mysqli("remotemysql.com","otxlbZUGgu","tCHZYshup6","otxlbZUGgu");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
  echo "Database Connected";
}
?>
