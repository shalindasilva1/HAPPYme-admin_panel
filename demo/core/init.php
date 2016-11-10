<?php
session_start();
require 'database/connect.php';
require 'functions/user.php';
require 'functions/general.php';
#if (logged_in() === true){
#  $session_user_id = $_SESSION['user_id'];
#  $user_data = user_data($session_user_id,'user_id','user_name', 'password', 'first_name', 'last_name', 'email', 'gender', 'type');
#}
$errors = array();
$errors[0] = '*In oder to access you must loged in';
$errors[2] = '';
$errors[4]='';
?>
