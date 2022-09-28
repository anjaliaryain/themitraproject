<?php
  ($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost","u428259499_tsw","Pandey2512","u428259499_thesecretwall"));
if ($GLOBALS["___mysqli_ston"] -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>