<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3; url=student.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>通知</title>
    <style>
        body {
            background-size: cover;
        }
    </style>
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
    } else {
        if (move_uploaded_file($_FILES["path"]["tmp_name"], $target_file)) {
        } else {
        }
    }
    $method = $_GET['method'];
    if ($method == "") {
        $sid = $_POST['sid'];
        $file = $_FILES["path"]["name"];
        $time = $_POST['time'];
        $way = $target_dir . basename($_FILES["path"]["tmp_name"]);
        $link = mysqli_connect('localhost', 'root', '12345678', 'school');
        $result = mysqli_query($link, "select * from student where sid='$sid'");
        $row = mysqli_fetch_assoc($result);
        $filedata = "file/{$row['file']}";
        unlink($filedata);
        $sql = "update student set file='$file',path='$way',time='$time' where sid='$sid'";
        if (mysqli_query($link, $sql)) {
            echo "<h1 align='center'>修改完成</h1>";
        } else {
            echo "<h1 align='center'>修改失敗</h1>";
        }
    } elseif ($method == "delete") {
        $sid = $_GET['sid'];
        $link = mysqli_connect('localhost', 'root', '12345678', 'school');
        $row = mysqli_fetch_assoc(mysqli_query($link, "select * from student where sid='$sid'"));
        $filedata = "file/{$row['file']}";
        if (file_exists($filedata)) {
            unlink($filedata);
        }

        $sql = "delete from student where sid='$sid'";
        if (mysqli_query($link, $sql)) {
            echo "<h1 align='center'>刪除完成</h1>";
        } else {
            echo "<h1 align='center'>刪除失敗</h1>";
        }
    }
    ?>

</body>

</html>