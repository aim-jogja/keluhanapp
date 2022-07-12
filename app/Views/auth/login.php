<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url('admin/css/login_style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('admin/css/global_style.css'); ?>">
  </head>
  <body>
          <?php 
            $session = session();
            $login = $session->getFlashdata('login');
            $username = $session->getFlashdata('username');
            $password = $session->getFlashdata('password');
          ?>
    <div class="box">
      <form class="" action="/auth/valid_login" method="post">
        <h1>Login</h1>
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="login" value="Login">
      </form>
        <div class="navbar">
            <a href="/auth/register" name="register">Sign Up</a>
        </div>
    </div>
  </body>
</html>
