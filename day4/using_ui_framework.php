<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>Using UI Framework</div>

<?php

include "ui_framework.php";

$button = new Button("Click me");

$input_username = new Input("test");
$input_password = new Input("password");
?>

<form method="post">
    <div>Username</div>
    <div><?php echo $input_username; ?></div>

    <div style="margin-top:10px;">Password</div>
    <div><?php echo $input_password; ?></div>

    <div style="margin-top: 10px;"><?php echo $button; ?></div>
</form>
</body>
</html>