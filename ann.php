<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>公告頁面</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            background-size: cover;
        }

        nav {
            background-color: #333;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            opacity: .7;
        }

        nav h1 {
            margin: 0;
            padding: 20px;
            text-align: center;
            font-size: 1.8em;
            color: white;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        nav a:hover {
            color: #4caf50;
            transition: color 0.3s ease;
        }

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
    <nav>
        <h1><a href="main.php">首頁</a></h1>
    </nav>
    <div class="announcement">
        <?php
        $newsid = $_GET["newsid"];
        $link = mysqli_connect('localhost', 'root', '12345678', 'school');
        $sql = "select * from manage where newsid='$newsid'";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<h1>{$row[1]}</h1>";
            echo "<p>{$row[2]}</p>";
        }
        ?>
    </div>


</body>

</html>