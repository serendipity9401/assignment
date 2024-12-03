<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3; url=index.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>通知</title>
</head>

<body background="home-bg.jpg">
    <?php
    $method=$_GET['method'];
    if ($method == "") {
        $newsid = $_POST['newsid'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $newsdate = $_POST['newsdate'];
        $tags=$_POST['tags'];
        $link = mysqli_connect('localhost', 'root', '12345678', 'school');
        $sql = "update manage set title='$title',content='$content',newsdate='$newsdate',tags='$tags' where newsid='$newsid'";
        if (mysqli_query($link, $sql)) {
            echo "<h1 align='center'>修改完成</h1>";
        } else {
            echo "<h1 align='center'>修改失敗</h1>";
        }
    } elseif ($method == "delete") {
        $newsid=$_GET['newsid'];
        $link = mysqli_connect('localhost', 'root', '12345678', 'school');
        $sql="delete from manage where newsid='$newsid'";
        if (mysqli_query($link, $sql)) {
            echo "<h1 align='center'>刪除完成</h1>";
        } else {
            echo "<h1 align='center'>刪除失敗</h1>";
        }
    }
    ?>
    
</body>

</html>