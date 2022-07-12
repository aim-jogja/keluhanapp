<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Keluhan</title>
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
    }
    .form-main{
        padding: 25px;
    }
    .form-w{
        float: left;
        width: 60%;
        margin: 0 0 0 15%;
        padding: 1%;
        border: 1px black solid;
        border-radius: 10px;
    }
    .sbmt{
        float: right;
        padding: 10px;
        margin: 0 23% 0 0;
    }
    .foot {
        float: left;
        background-color: #3498db;
        height: 90px;
        width: 100%;
        margin-top: 175px;
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
      <h1 style="margin-top: 100px;">Form Keluhan</h1>
    <div class="wrapper">
        <form action="/keluhan/simpan" method="post" class="form-main" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="content">
                <input class="form-w" type="text" name="judul" placeholder="Judul Keluhan">
            </div>
            <div class="content">
                <textarea class="form-w" name="isi" id="isi" cols="30" rows="10"></textarea>
            </div>
            <div class="content">
                <input type="file" name="gambar" id="gambar" class="form-w">
            </div>
            <div class="content">
                <input type="submit" class="sbmt" name="submit" value="Submit">
            </div>
            
        </form>
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