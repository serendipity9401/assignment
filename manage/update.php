<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>公告修改</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
        body {
            background: url("home-bg.jpg") no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        nav {
            background-color: #333;
            width: 100%;
            position: sticky;
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

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-top: 80px;
        }

        input[type="text"],
        input[type="date"] {
            width: 93%;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            font-size: 15px;
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            margin-top: 10px;
            cursor: pointer;
            width: 100%;
        }

        td button {
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            margin-top: 10px;
            cursor: pointer;
        }


        button:hover {
            background-color: #45a049;
        }


        table {
            width: auto;
            margin-top: 30px;
            border-collapse: collapse;
            background-color: rgba(255, 255, 255, 0.8);
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 5px;
        }

        th {
            background-color: #f2f2f2;
        }

        caption {
            margin: 10px;
        }

        form a {
            display: inline-block;
            text-align: center;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 4px;
            margin-top: 10px;
            cursor: pointer;
            width: 90%;
        }

        form a:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body background="home-bg.jpg">
    <nav>
        <h1><a href="/homework/main.php">首頁</a></h1>
    </nav>
    <h1>公告修改</h1>
    <?php
    $newsid = $_GET['newsid'];
    $link = mysqli_connect('localhost', 'root', '12345678', 'school');
    $sql = "select distinct * from manange where newsid='newsid'";
    $result = mysqli_query($link, $sql);
    ?>
    <form method="POST" action="dblink.php">

        <table class="RedList" align="center" width="40%">
            <tr>
                <td>公告編號</td>
                <td><input type="text" name="newsid" readonly value="<?php echo $newsid; ?>"></td>
            </tr>

            <tr>
                <td>公告標題</td>
                <td><input type="text" name="title" required></td>
            </tr>

            <tr>
                <td>公告內容</td>
                <td><input type="text" name="content" required></td>
            </tr>

            <tr>
                <td>公告日期</td>
                <td><input type="date" name="newsdate" required></td>
            </tr>
            <td>公告標籤:</td>
            <td>
                <select id="tags" name="tags" required>
                    <option value="製造業">製造業</option>
                    <option value="服務業">服務業</option>
                    <option value="500大企業">500大企業</option>
                </select>
            </td>
        </table>
        <button type="submit">修改資料</button>
    </form>


</body>

</html>