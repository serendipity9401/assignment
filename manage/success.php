<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="3; url=index.php">
  <title>Document</title>
  <style>
        body {
            background-size: cover;
        }
    </style>
</head>

<body background="home-bg.jpg">
  <?php
  $error = "";
  $newsid = $_POST["newsid"];
  $title = $_POST["title"];
  $content = $_POST["content"];
  $newsdate = $_POST["newsdate"];
  $tags = $_POST["tags"];
  $link = mysqli_connect('localhost', 'root', '12345678', 'school');
  $sql = "insert into manage (newsid, title, content, newsdate,tags) values ('$newsid', '$title', '$content', '$newsdate','$tags')";
  if (mysqli_query($link, $sql)) {
    echo "<h1 align='center'>新增成功</h1>";
  } else {
    echo "<h1 align='center'>新增失敗</h1>";
  }
  ?>
  
</body>

</html>