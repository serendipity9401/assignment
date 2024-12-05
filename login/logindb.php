<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入-產業實習平台</title>
</head>
<body background="home-bg.jpg">
<?php
    session_start();
    $ID=$_POST['ID'];
    $password=$_POST['password'];
    $tags=$_POST['tags'];
    $_SESSION['tags']=$tags;
   
    $link = mysqli_connect('localhost', 'root', '12345678', 'school');
    $sql = "SELECT*FROM account where ID='$ID' and password='$password'";
    $result = mysqli_query($link, $sql);
    if($row=mysqli_fetch_assoc($result)){
        echo"<h1 align='center'>登入成功</h1>";
        $_SESSION['name']=$row['name'];
        $_SESSION['level']=$row['level'];
        echo '<meta http-equiv="refresh" content="2; url=/homework/main.php">';
    }else{
        echo "<h1 align='center'>登入失敗</h1>";
        echo '<meta http-equiv="refresh" content="2; url=login.html">';
    }
    ?>
</body>
</html>