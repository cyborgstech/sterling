<?php
$mysqli = new mysqli("192.185.129.121","vishasrk_sterlin","sterling@12","vishasrk_sterling");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
    echo 'Database connected';
}
?>