<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="2; url=teacher.php">
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
    $method=$_GET['method'];
    if ($method == "") {
        $student = $_POST['student'];
        $name = $_POST['name'];
        $stime = $_POST['stime'];
        $etime = $_POST['etime'];
        $link = mysqli_connect('localhost', 'root', '12345678', 'school');
        $sql = "update teacher set name='$name',stime='$stime',etime='$etime' where student='$student'";
        if (mysqli_query($link, $sql)) {
            echo "<h1 align='center'>修改完成</h1>";
        } else {
            echo "<h1 align='center'>修改失敗</h1>";
        }
    } elseif ($method == "delete") {
        $student=$_GET['student'];
        $link = mysqli_connect('localhost', 'root', '12345678', 'school');
        $sql="delete from teacher where student='$student'";
        if (mysqli_query($link, $sql)) {
            echo "<h1 align='center'>刪除完成</h1>";
        } else {
            echo "<h1 align='center'>刪除失敗</h1>";
        }
    }
    ?>
    
</body>

</html>