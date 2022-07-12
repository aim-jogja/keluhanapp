<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title> 
    <link rel="stylesheet" href="<?php echo base_url('penghuni/css/home_style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('penghuni/css/global_style.css'); ?>">
    <style>
      
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
      <a href="/keluhan/index/" name="keluhan_saya">Keluhan Saya</a>
      <a href="/keluhan/daftarkeluhan" name="daftar_keluhan">Daftar Keluhan</a>
      <a href="/user/profile" name="profile">Profile</a>
    </div>

    <div style="background-image: url('<?php echo base_url('/bahan/halaman_kost.jpeg'); ?>');" class="top">
      <div class="top-content">
        <div class="card">
          <div class="card-content">
            <img src="../../bahan/Deni.jpeg" alt="">
            <div class="card-alamat">
              <div class="alamat">
                <h4>Alamat</h4>
                <p>Jl. Garuda no.94 RT 03 RW 15, Mancasan lor,
                Condongcatur, Depok, Sleman, Yogyakarta</p>
              </div>
              <div class="pemilik">
                <h4>Pemilik</h4>
                <p>Maryono, SE</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <h1>Keluhan Terbaru</h1>

      <div class="container">
        <?php 
            foreach($keluhan as $k){
        ?>
          <div class="card">
            <div class="content">
              <div class="nama"><?php echo $k["judul"] ?></div>
              <div class><hr></div>
              <div class="laporan">
                <?php echo $k["isi"] ?>
              </div>
            </div>
          </div>
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
