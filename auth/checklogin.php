<?php 
  session_start();
  require_once '../common/db.php';
  require_once '../common/const.php';
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "select * from accounts where `email`='$email'";
  $account = executequery($sql);
  if (!$account) {
    $_SESSION['email'] = $email;
  	header("location:".BASE_URL."auth/login.php?err=Sai email rồi kìa."); die();
  }
  if (!password_verify($password, $account['password'])) {
    $_SESSION['email'] = $email;
    header("location:".BASE_URL."auth/login.php?err=Sai password rồi bạn ơi"); die();
  }
  if ($account['status']!=1) {
    header("location:".BASE_URL."auth/login.php?err=Tài khoản của bạn đã bị ra đảo, liên hê SẾP để được hỗ trợ"); die();
      
  }
  $_SESSION['account'] = $account;

  if ($account['role']==1) {
    header("location:".BASE_URL); die();
  }
  header("location:".BASE_URL."auth/");die();
 ?>