<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Keluhan</title>
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
        background: #79c3f5;
        float: left;
        width: 100%;
        padding-left: 5%;
        padding-bottom: 2%;
        margin-top: 20px;
        padding-top: 20px;
        border: 1px black solid;
        border-radius: 20px;
      }
      .gambar{
        float: left;
      }
      .detail{
        float: left;
        width: 50%;
        margin-left: 5%;
      }
      .detail-2{
        float: left;
        width: 30%;
        margin-left: 5%;
      }
      a:link{
        text-decoration: none !important;
        color: black;
      }
      .proses-btn{
        float: left;
        margin-top: 10%;
        border-radius: 10px;
      }
      .proses-btn:hover{
        background: #e2e2e2;
      }
      .komentar-wrapper{
        float: left;
        width: 50%;
        margin-left: 5%;
        margin-top: 50px;
      }
      .komentar-form{
        float: left;
        width: 50%;
        margin-left: 33%;
        margin-top: 50px;
      }
      .pengomentar{
        margin-top: 15px;
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
    <?php $session = session()?>
    <div id="navbar" class="navbar">
      <a href="/user/index" name="kosplain">KOSPLAIN</a>
      <a href="/keluhan/index" name="keluhan_saya">Keluhan Saya</a>
      <a href="/keluhan/daftarkeluhan" name="daftar_keluhan">Daftar Keluhan</a>
      <a href="/user/profile" name="profile">Profile</a>
    </div>
      <h1 style="margin-top: 70px;">Detail Keluhan</h1>
      <div class="wrapper">
        <div class="content">
            <img class="gambar" src="<?php 
                  if($keluhan["gambar"] != ""){
                    echo base_url('uploads/gambar/'.$keluhan["gambar"]);
                  }
                  ?>" alt="" srcset="" height="300">
            <div class="detail">
              <h3><?php echo $keluhan["judul"]?></h3>
              <div><?php echo $keluhan["isi"]?></div>
            </div>   
            <div class="detail-2" style="margin-top: 3%;">
              <span style="display: block;">No Keluhan : <?php echo $keluhan["id"]?></span>
              <span style="display: block;">Tanggal : <?php echo $keluhan["tanggal"]?></span>
              <span style="display: block;">Pengaju Keluhan : <?php echo $user["nama_lengkap"]?></span>
              <span style="display: block;">Status :
                    <?php 
                        if($keluhan["status"] == 0){
                            echo "Belum di Proses";
                        }else if($keluhan["status"] == 1){
                          echo "di Proses";
                        }else if($keluhan["status"] == 2){
                          echo "Selesai";
                        }                     
                    ?>
              </span>
            </div>                     
        <?php 
          if($session->get("role") == 1){
            if($keluhan["status"] == 0){
        ?>
          <a class="proses-btn" href="/keluhan/proses/<?php echo $keluhan["id"] ?>" style="border: 1px solid black; padding: 10px;">Proses</a>
        <?php
            }else if($keluhan["status"] == 1){
        ?>
          <a class="proses-btn" href="/keluhan/selesai/<?php echo $keluhan["id"] ?>" style="border: 1px solid black; padding: 10px;">Selesai</a>
        <?php
            }
          }
        ?>
          <div class="komentar-wrapper">
              <h2>Komentar</h2>
              <?php 
                  use App\Models\UserModel;
                  $us = new UserModel();
                  foreach($komentar as $komen){
                    $pengguna = $us->find($komen["id_user"]);
              ?>
                  <div class="pengomentar">
                      <?php 
                        echo "<h3 style='margin: 0 0 5 0;'>".$pengguna['nama_lengkap']."</h3>";
                      ?>
                  </div>
                  <div class="isi-komentar">
                      <?php 
                        echo $komen["tanggal"]."<br>";
                        echo $komen["isi"];
                      ?>
                  </div>
                  
              <?php
                  }
              ?>
          </div>
          <div class="komentar-form" style="margin-top: 10%;">
            <form action="/komentar/add/<?php echo $session->get("id_user")?>/<?php echo $keluhan["id"]?>" method="post">
              <?= csrf_field(); ?>
              <h3>Tulis Komentar</h3>
                <textarea style="display:block; padding: 7px;" name="komentar" id="komentar" cols="30" rows="10"></textarea>
                <input style="display:block; padding: 5px;" type="submit" value="Kirim Komentar">
            </form>
          </div>
        </div>
        
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