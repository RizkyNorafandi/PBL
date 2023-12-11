<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center>
    <h1>Tabel Login</h1>
    <form action="<?php echo base_url('c_auth/cek_login') ?>" method="post">
    
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit">
                </td>
            </tr>
            <tr>
                <td>
                    <a href="<?php echo base_url('c_auth/regis') ?>">Buat akun</a>
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>

