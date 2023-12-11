<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Session</title>
</head>
<body>
    Username    :<?php echo $this->session->userdata('username');?><br>
    Role        :<?php echo $this->session->userdata('role');?><br>
    name        : <?php echo $this->session->userdata('name');?><br>
    <a href="c_sess/set"><button>Set Session</button></a>
</body>
</html>