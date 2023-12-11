<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1> Silahkan Buat akun</h1>
    <form action="<?php echo base_url('c_auth/register') ?>" method="post">
    <table>
    <tr>
    <td>Username</td>
    <td>:</td>
    <td>
        <input type="text" name="username"/>
    </td>
    </tr>
    <tr>
    <td>Password </td>
    <td>:</td>
    <td>
        <input type="password" name="password"/>
    </td>
    </tr>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td>
        <input type="text" name="nama"/>
    </td>
    </tr>
    <tr>
    <td>role</td>
    <td>:</td>
    <td>
        <select name="role">
            <option value="">Pilih Role </option>
            <option value="Sentinel">Sentinel</option>
            <option value="Duelelist">Duelelist</option>
            <option value="Controler">Controler</option>
            <option value="Inisiator">Inisiator</option>
        </select>
    </td>
    </tr>
    <tr>
        <td>
            <button type="submit">Buat</button>
        </td>
    </tr>
    </center>



    </table>
    </form>
</body>
</html>