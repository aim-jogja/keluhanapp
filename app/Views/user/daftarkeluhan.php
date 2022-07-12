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
        margin: 0 9% 0 9%;
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
      .foot {
        float: left;
        background-color: #3498db;
        height: 90px;
        width: 100%;
        margin-top: 30px;
        align-items: center;
        justify-content: center;
        text-align: center;
      }
    </style>
</head>
<body>
    <div id="navbar" class="navbar">
      <a href="/user/index" name="kosplain">KOSPLAIN</a>
      <a href="/keluhan/index" name="keluhan_saya">Keluhan Saya</a>
      <a href="/keluhan/daftarkeluhan" name="daftar_keluhan">Daftar Keluhan</a>
      <a href="/user/profile" name="profile">Profile</a>
    </div>
      <h1 style="margin-top: 70px;">Daftar Keluhan</h1>
      <div class="wrapper">
          <?php
            foreach($keluhan as $k){
              
          ?>
          <a href="/keluhan/detail/<?php echo $k["id"] ?>">
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
      <div class="foot">
        <div class="outter">
          <div class="text">
            <br>
            <br>
            2022 - All rights reserved. Kosplain
          </div>
        </div>
      </div>
</body>
</html>