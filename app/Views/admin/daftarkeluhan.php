<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Keluhan</title>
    <link rel="stylesheet" href="<?php echo base_url('admin/css/keluhan_bd_style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('admin/css/global_style.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="<?php echo base_url('penghuni/css/home_style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('penghuni/css/global_style.css'); ?>">

    <style>
      .wrapper{
        width: 80%;
        float: left;
        height: auto;
        margin: 0 9% 10% 9%;
      }
      .content{
        float: left;
        width: 100%;
        padding-left: 5%;
        padding-bottom: 2%;
        margin-top: 20px;
        border: 1px black solid;
        border-radius: 20px;
      }
      a:link{
        text-decoration: none !important;
        color: black;
      }
      .content:hover{
        background: #e2e2e2;
      }
    </style>
</head>
<body>
    <div id="navbar-kosplain" class="navbar-kosplain">
        <a href="/auth/logout" name="logout">Logout</a>
        <a href="/admin/keluhan" name="keluhan">Keluhan</a>
        <a href="/admin/penghuni" name="data_penghuni">Data Penghuni</a>
        <a href="/admin/index" name="dashboard">Dashboard</a>
        <a href="#" name="kosplain">KOSPLAIN</a>
    </div>
      <h1 style="margin-top: 70px;">Daftar Keluhan</h1>
      <div class="wrapper">
          <?php
            foreach($keluhan as $k){
              
          ?>
          <a href="/admin/detailkeluhan/<?php echo $k["id"] ?>">
            <div class="content">
              <h3><?php echo $k["judul"]?></h3>
              <span><?php echo $k["tanggal"]?></span>
              <div><?php echo $k["isi"]?></div>
            </div>
          </a>
          <?php
          
          }
          ?>
      </div>
        <footer class="kosplain-footer" style="position:relative;bottom:0;width:100%;margin-top:25px;">
              <br>
              <br>
              2022 - All rights reserved. Kosplain
        </footer>
</body>
</html>