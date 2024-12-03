<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                .announcement {
            max-width: 800px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 130px;
            padding: 30px;
            text-align: left;
        }

        .announcement h1 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #4caf50;
            border-bottom: 2px solid #4caf50;
            padding-bottom: 15px;
        }

        .announcement p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin: 10px 0;
        }
    </style>
</head>

<body background="home-bg.jpg">
<div class="announcement">
    <?php
    $sid=$_GET['sid'];
    $link = mysqli_connect('localhost', 'root', '12345678', 'school');
    $sql = "select * from student where sid='$sid'";
    $result=mysqli_query($link,$sql);
    while ($row = mysqli_fetch_assoc($result)){
    $filedata ="file/{$row['file']}";
    header("Content-Type: enctype='multipart/form-data'");
    header('Content-Disposition: attachment; filename='.$row['file']);
    readfile($filedata);
}
    ?>
    </div>
</body>

</html>