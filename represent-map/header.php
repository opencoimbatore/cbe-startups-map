<?php
include "./include/db.php";

// connect to db
mysqli_real_connect($db_host, $db_user, $db_pass) or die(mysqli_error());
mysqli_select_db($db_name) or die(mysqli_error());

// if map is in Startup Genome mode, check for new data
if($sg_enabled) {
  require_once("include/http.php");
  include_once("startupgenome_get.php");
}

// input parsing
function parseInput($value) {
  $value = htmlspecialchars($value, ENT_QUOTES);
  $value = str_replace("\r", "", $value);
  $value = str_replace("\n", "", $value);
  return $value;
}



?>
