<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url('admin/css/data_penghuni_style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('admin/css/table_style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('admin/css/global_style.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/00f47f4bd4.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="content">
      <div class="top">
      </div>
      <div id="navbar-kosplain" class="navbar-kosplain">
        <a href="/auth/logout" name="logout">Logout</a>
        <a href="/admin/keluhan" name="keluhan">Keluhan</a>
        <a href="/admin/penghuni" name="data_penghuni">Data Penghuni</a>
        <a href="/admin/index" name="dashboard">Dashboard</a>
        <a href="#" name="kosplain">KOSPLAIN</a>
      </div>
      <div class="title">
        <h1>Data Penghuni</h1>
      </div>

      <div class="search">
        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control input-sm" maxlength="64" placeholder="Cari nama...">
      </div>

        <div class="outer-wrapper">
          <div class="table-wrapper">
            <table id="myTable" class="myTable">
              <tr data-href="profile_penghuni.html">
                <thead>
                  <th>No</th>
                  <th>ID Penghuni</th>
                  <th>No Kamar</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>No Telepon</th>
                  <th>NIK</th>
                </thead>
              </tr>
              <tbody>
                <?php 
                    foreach($user as $u){
                ?>
                    <tr data-href="/admin/penghunidetail/<?php echo $u["id"] ?>">
                        <td>2</td>
                        <td><?php echo $u["id"] ?></td>
                        <td>01</td>
                        <td><?php echo $u["nama_lengkap"] ?></td>
                        <td><?php echo $u["username"] ?></td>
                        <td><?php echo $u["no_hp"] ?></td>
                        <td><?php echo $u["nik"] ?></td>
                    </tr>
                <?php
                    }
                ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="bot">

        </div>

        <footer class="kosplain-footer" style="position:fixed;bottom:0;width:100%;">
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
      <script type="text/javascript" src="<?php echo base_url('admin/js/search-func.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('admin/js/sort-table.js'); ?>"></script>

  </body>
</html>
