<?php
include "./include/db.php";

// connect to db
$msl = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$msl) {
echo (mysqli_error($msl));
}

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
