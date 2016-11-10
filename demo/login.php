<?php
include 'core/init.php';
$username = $password = "";
if (empty($_POST) == false ) {
  $username = $_POST['un'];
  $password = $_POST['pw'];
  if (empty($username) == true || empty($password) == true) {
    $errors[1] = '*Enter username and password';
  }else{
    $login = login($username, $password);
    if ($login == false) {
      $errors[1] = '*Username password does not match';
    }
    else{
      $_SESSION['user_id'] = $login;
      header('Location: sysuser.php');
      exit();
    }
  }
}
echo ($errors[1]);
?>
