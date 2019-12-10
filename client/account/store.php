<?php
    require_once '../../common/db.php';
    require_once '../../common/const.php';
    $name = $_POST['name'];
    $email  = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    $agree_term = $_POST['agree_term'];
    $user = "select * from accounts where `email` = $email";
    $old_mail = executequery($user);
    $err=[];
    if (!$agree_term) {
        $err['agree_term'] = 'Bạn cần đồng ý điều khoản trước khi Submit!';
    }
    if ($old_mail) {
        $err['email'] = 'Email đã được sử dụng!';
    }
    if (strlen($phone)!=10) {
        $err['phone'] = 'Số điện thoại bằng 10 số!';
    }
    if (strlen($password)<8) {
        $err['password'] = 'Mật khẩu cần dài hơn 8 kí tự!';
    }
    if ($re_password != $password) {
        $err['re_password'] = 'Mật khẩu nhập lại không khớp!';
    }
    if ($err != []) {
        header('Location:'.BASE_URL.'client/account/create.php?'.http_build_query($err));
        die;
    }
    
    $name = getConnect()->quote($_POST['name']);
	$email = getConnect()->quote($_POST['email']);
	$phone = getConnect()->quote($_POST['phone']);
	$password = password_hash($password, PASSWORD_DEFAULT);

    $saveaccount = "insert into accounts 
                                (`name`,
                                `email`,
                                `phone`,
                                `password`,
                                `status`,
                                `role`)
                            values(
                                $name,
                                $email,
                                $phone,
                                '$password',
                                1,
                                1)";

    // var_dump($saveaccount); die;
    executequery($saveaccount);
    header('location:'.BASE_URL."auth/login.php");
?>