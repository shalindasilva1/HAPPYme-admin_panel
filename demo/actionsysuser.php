<?php
include 'core/init.php';

if ($_POST['fno'] == 1) {
  $add_data = array(
    'username' => $_POST['username'],
    'createdby' => $_POST['createdby'],
   );
  add_sysuser($add_data);
  header('Location:sysuser.php');



}else if($_POST['fno'] == 2){
  $options = ['cost' => 11,];
  $password=password_hash($_POST['password'], PASSWORD_DEFAULT, $options);
  $add_data = array(
    'username' => $_POST['username'],
    'password' => $password,
    'created_by' => $_POST['created_by'],
  );
  
}
 ?>
