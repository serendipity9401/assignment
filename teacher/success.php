<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="2; url=teacher.php">
  <title>通知</title>
  <style>
    body {
      background-size: cover;
    }
  </style>
</head>

<body background="home-bg.jpg">
  <?php
  $error = "";
  $student = $_POST["student"];
  $name = $_POST["name"];
  $stime = $_POST["stime"];
  $etime = $_POST["etime"];
  $but = $_POST["but"];
  //$del = $_POST["del"];
  $link = mysqli_connect('localhost', 'root', '12345678', 'school');
  if ($stime > $etime) {
    $error = "開始時間不能晚於結束時間！";
  } else {
    $sql = "insert into teacher (student, name, stime, etime) values ('$student', '$name', '$stime', '$etime')";
    if (mysqli_query($link, $sql)) {
      echo "<h1 align='center'>新增成功</h1>";
    } else {
      echo "<h1 align='center'>新增失敗</h1>";
    }
  }
  ?>

</body>

</html>