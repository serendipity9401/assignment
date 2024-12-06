<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3; url=login.html">
    <title>通知</title>
    <style>
        body {
            background-size: cover;
        }
    </style>
</head>

<body background="home-bg.jpg">
    <?php
    $ID = $_POST["ID"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $level = $_POST["level"];
    $link = mysqli_connect('localhost', 'root', '12345678', 'school');
    $sql = "insert into account (ID, password, name, level) values ('$ID', '$password', '$name', '$level')";
    if (mysqli_query($link, $sql)) {
        echo "<h1 align='center'>新增成功</h1>";
    } else {
        echo "<h1 align='center'>新增失敗</h1>";
    }
    ?>

</body>

</html>