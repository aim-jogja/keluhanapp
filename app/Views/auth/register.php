<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="<?php echo base_url('admin/css/register_style.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('admin/css/global_style.css'); ?>">
    </head>
    <body>
        <?php 
            $session = session();
            $error = $session->getFlashdata('error');
        ?>
        
        <?php if($error){ ?>
            <p style="color:red">Terjadi Kesalahan:
                <ul>
                    <?php foreach($error as $e){ ?>
                    <li><?php echo $e ?></li>
                    <?php } ?>
                </ul>
            </p>
        <?php } ?>
        <div class="box">
        <form method="post" action="/auth/valid_register" enctype="multipart/form-data">
            <h1>Register</h1>
            <input type="text" name="namalengkap" placeholder="Nama Lengkap">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="no_hp" placeholder="No HP">
            <input type="text" name="nik" placeholder="NIK">
            <input type="button" id="photos" value="Upload Photo" onclick="document.getElementById('photo').click();" />
            <input type="file" style="display:none;" id="photo" name="photo"/>
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="confirm" placeholder="Ulangi Password">
            <input type="submit" name="submit" value="Submit">
        </form>
            <p>
                <a href="/auth/login">Sudah punya akun?</a>
            </p>
        </div>
    </body>
</html>