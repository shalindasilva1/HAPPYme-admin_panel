<?php

//validate data for other inputs
function sanitize  ($data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  $data = mysql_real_escape_string($data);
  return $data;
}

//validate array data for the edit user form
function array_validate(&$data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  $data = mysql_real_escape_string($data);
}
?>
