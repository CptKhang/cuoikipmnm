<?php
$mysqli = new mysqli("localhost","root","","website");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Kết nối MySQL lỗi" . $mysqli -> connect_error;
  exit();
}
?>