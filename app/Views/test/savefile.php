<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        helper('form');
        $attributes = ['class' => 'email', 'id' => 'myform'];
        echo form_open('test/savefile',$attributes);
        echo form_upload('username');
        echo form_submit('username','送出');

    ?>
</body>
</html>