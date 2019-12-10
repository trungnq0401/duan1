<?php
    require_once "../../common/const.php";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?=BASE_URL?>client/access/fonts/material-icon_newaccount/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?=BASE_URL?>client/access/css/style_newaccount.css">
</head>
<body>

    <div class="main">

        <section class="signup">
         <!--    <img src="access/img/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="<?=BASE_URL?>client/account/store.php" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                            <?php if (isset($_GET['name'])): ?>
                                <i class="error"><?= $_GET['name'] ?></i>
                            <?php endif ?>
                        </div>  
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                            <?php if (isset($_GET['email'])): ?>
                                <i class="error"><?= $_GET['email'] ?></i>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="phone" id="phone" placeholder="Phone Number"/>
                            <?php if (isset($_GET['phone'])): ?>
                                <i class="error"><?= $_GET['phone'] ?></i>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            <?php if (isset($_GET['password'])): ?>
                                <i class="error"><?= $_GET['password'] ?></i>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                            <?php if (isset($_GET['re_password'])): ?>
                                <i class="error"><?= $_GET['re_password'] ?></i>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree_term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            <?php if (isset($_GET['agree_term'])): ?>
                               <br> <i class="error"><?= $_GET['agree_term'] ?></i>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="<?=BASE_URL?>auth/login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?=BASE_URL?>client/access/vendor/jquery_newaccount/jquery-ui.min.js"></script>
    <script src="<?=BASE_URL?>client/access/js/main_newaccount.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>