<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keluhan Saya</title>
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
        margin-bottom: 125px;
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
      .buatkeluhan{
        border: 1px black solid;
        padding: 10px;
        float: right;
        color: #3498db;
        border-radius: 20px;
      }
      .buatkeluhan:hover{
        background-color: #e2e2e2;
      }
      a:link{
        text-decoration: none !important;
        color: black;
      }
      .content:hover{
        background: #e2e2e2;
      }
      .foot {
        position: fixed;
        bottom: 0;
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
      <h1 style="margin-top: 70px;">Keluhan Saya</h1>
      <div class="wrapper">
          <a href="/keluhan/buat" class="buatkeluhan">Buat Keluhan</a>
          <div class="outer-wrapper">
          <div class="table-wrapper">
            <table id="myTable" class="myTable">
              <tr data-href="profile_penghuni.html">
                <thead>
                  <th>No</th>
                  <th>ID</th>
                  <th>Judul</th>
                  <th>Tanggal</th>
                  <th>Isi</th>
                </thead>
              </tr>
              <tbody>
                <?php 
                    foreach($keluhan as $k){
                ?>
                    <tr data-href="/keluhan/detail/<?php echo $k["id"] ?>">
                        <td>2</td>
                        <td><?php echo $k["id"] ?></td>
                        <td><?php echo $k["judul"] ?></td>
                        <td><?php echo $k["tanggal"] ?></td>
                        <td><?php echo $k["isi"] ?></td>
                    </tr>
                <?php
                    }
                ?>
              </tbody>
            </table>
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
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url('admin/js/clickable_table.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('admin/js/search-func.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('admin/js/sort-table.js'); ?>"></script>
</body>
</html>