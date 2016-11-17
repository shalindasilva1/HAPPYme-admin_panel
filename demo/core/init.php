<?php
session_start();
require 'database/connect.php';
require 'functions/user.php';
require 'functions/general.php';
if (logged_in() === true){
  $session_user_id = $_SESSION['user_id'];
  $user_data = user_data($session_user_id,'suid','user_name', 'password', 'created_time', 'created_by','type');
  return $user_data;
}
$errors = array();
$errors[0] = '*In oder to access you must loged in';
?>
