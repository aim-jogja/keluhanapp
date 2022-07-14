<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <link rel="stylesheet" href="<?php echo base_url('admin/css/dashboard_style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('admin/css/global_style.css'); ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/00f47f4bd4.js" crossorigin="anonymous"></script>
    <style>
        td a { 
            display: block; 
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

    <div class="content">

      <div class="top">

      </div>

      <div class="title">
        <h1>Dashboard</h1>
      </div>

      <table class="card-box">
        <tr>
          <th colspan="4">Keluhan</th>
        </tr>
        <tr>
          <td>
            <div class="content">
              <div class="cards">
                <div class="card">
                  <div class="box">
                    <h3>Total Keluhan</h3>
                    <h1><?php echo $total[0]->total; ?></h1>
                  </div>
                </div>
              </div>
              <div class="content-2"></div>
            </div>
          </td>
          <td>
            <div class="content">
              <div class="cards">
                <div class="card">
                  <div class="box">
                    <h3>Keluhan Bulan Ini</h3>
                    <h1><?php echo $monthCount[0]->total_bulan; ?></h1>
                  </div>
                </div>
              </div>
              <div class="content-2"></div>
            </div>
          </td>
          <td>
            <div class="content">
              <div class="cards">
                <div class="card">
                  <div class="box">
                    <h3>Keluhan Minggu Ini</h3>
                    <h1><?php echo $total[0]->total; ?></h1>
                  </div>
                </div>
              </div>
              <div class="content-2"></div>
            </div>
          </td>
          <td>
            <div class="content">
              <div class="cards">
                <div class="card">
                  <div class="box">
                    <h3>Keluhan Diselesaikan</h3>
                    <h1><?php echo $kSelesai; ?></h1>
                  </div>
                </div>
              </div>
              <div class="content-2"></div>
            </div>
          </td>
        </tr>
      </table>

      <div class="history">
        <h1>Keluhan</h1>
        <div class="outer-wrapper">
          <div class="table-wrapper">
            <table class="list">
              <tr>
                <thead>
                  <th>No</th>
                  <th>ID Keluhan</th>
                  <th>Keluhan</th>
                  <th>Date</th>
                  <th>Status</th>
                </thead>
              </tr>
              <tbody>
                <?php
                    foreach($keluhan as $k){
                ?>
                    <tr data-href="/admin/detailkeluhan/<?php echo $k["id"] ?>">
                        <td><?php echo $k["id"];?></td>
                        <td><?php echo $k["id"];?></td>
                        <td><?php echo $k["judul"];?></td>
                        <td><?php echo $k["tanggal"];?></td>
                        <td><?php 
                            if($k["status"] == 0){
                                echo "Belum di proses";
                            }else if($k["status"] == 1){
                                echo "di proses";
                            }else if($k["status"] == 2){
                                echo "selesai";
                            }else{
                                echo "di tolak";
                            }
                            ?>
                        </td>
                    </tr>
                <?php
                    }                
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="nothing">

      </div>

      <footer class="kosplain-footer">
        <div class="outter">
          <div class="text">
            <br>
            <br>
            2022 - All rights reserved. Kosplain
          </div>
        </div>
      </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/js/clickable_table.js'); ?>"></script>

  </body>
</html>
