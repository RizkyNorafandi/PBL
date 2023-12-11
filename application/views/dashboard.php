<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
<center>
    <h2>Halaman dashboard</h2>
    Selamat Datang!! <br>
    nama : <?php echo $this->session->userdata('nama') ?>  <br>
    username : <?php echo $this->session->userdata('username') ?> <br> 
    role : <?php echo $this->session->userdata('role') ?> <br><br>

    <a href="<?php echo base_url('auth') ?>"><button>Logout</button></a>
</center>
</body>
</html>