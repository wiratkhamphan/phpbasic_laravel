<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Form</h3>
<form action="form.php" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['name'])) {
    echo $_POST['name'];
}
?>
</body>
</html>