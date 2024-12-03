<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3; url=student.php">
    <title>Document</title>
</head>

<body background="home-bg.jpg">
    <?php
    $target_dir = "file/";
    $target_file = $target_dir . basename($_FILES["path"]["name"]);
    $uploadOk = 1;
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "上傳失敗";
    } else {
        if (move_uploaded_file($_FILES["path"]["tmp_name"], $target_file)) {
            echo "上傳成功";
        } else {
            echo "上傳失敗";
        }
    }

    $sid = $_POST["sid"];
    $file = $_FILES["path"]["name"];
    $time = $_POST["time"];
    $way = $target_dir.basename($_FILES["path"]["tmp_name"]);
    $link = mysqli_connect('localhost', 'root', '12345678', 'school');
    $sql = "insert into student (sid, file, path , time) values ('$sid', '$file', '$way', '$time')";
    if (mysqli_query($link, $sql)) {

        echo "<h1 align='center'>上傳成功</h1>";
    } else {

        echo "<h1 align='center'>上傳失敗</h1>";
    }
    ?>

</body>

</html>