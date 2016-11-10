<?php
//return user id after searching the user name
function suid_from_username($username){
  $username = sanitize($username);
  $query = mysql_query("SELECT `suid` FROM `systemuser` WHERE `user_name` = '$username'");
  return mysql_result($query, 0, 'suid');
}

//login function returns user id
function login ($username, $password){
  $suid = suid_from_username($username);
  $query = mysql_query("SELECT `password` FROM `systemuser` WHERE `suid` = $suid ");
  $hash = mysql_result($query, 0, 'password');
  return (password_verify($password, $hash)) ? $suid : false;
}

?>
