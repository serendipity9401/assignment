<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>產業實習平台</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-size: cover;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #f39c12;
            font-size: 3em;
            margin-top: 20px;
        }

        .section {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .section h2 {
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        button {
            background-color: #3498db;
            color: white;
            font-size: 1.2em;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            user-select: none;
            text-align: center;
        }

        .checkbox-container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .checkbox-container .checkmark {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 5px;
        }

        .checkbox-container:hover input~.checkmark {
            background-color: #ccc;
        }

        .checkbox-container input:checked~.checkmark {
            background-color: #3498db;
        }

        .checkbox-container .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .checkbox-container input:checked~.checkmark:after {
            display: block;
        }

        .checkbox-container .checkmark:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            transform: rotate(45deg);
        }

        .login-button {
            position: fixed;
            top: 7%;
            right: 10.29%;
            background-color: #e74c3c;
            color: white;
            font-size: 30px;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            z-index: 1000;
        }

        .login-button:hover {
            background-color: #c0392b;
        }

    </style>
</head>

<body background="home-bg.jpg">
    
    <?php
    // echo $_SESSION['level'];
	    if(isset($_SESSION['name']))
		{
			echo "<span class='login-button'>您好，", $_SESSION['name'], $_SESSION['level']," <a href='logout.php' > [登出]</a><a href='link.php'} > [管理]</a></span>";
	    }
		else
		{
			echo "<a href='/homework/login/login.html' class='login-button'>登入</a>";
		}
	  ?>
    <div class="container">
        <h1>產業實習平台</h1>

        <div class="section">
            <h2>公告一覽</h2>
            <table>
                <tr>
                    <th>公告編號</th>
                    <th>公告標題</th>
                    <th>公告日期</th>
                    <th>公告標籤</th>
                </tr>
                <?php
                $tags = $_SESSION['tags'];
                $link = mysqli_connect('localhost', 'root', '12345678', 'school');
                $sql = "SELECT * FROM manage ORDER BY CASE WHEN tags ='$tags' THEN 1 ELSE 2 END";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>
                            <td>{$row[0]}</td>
                            <td><a href='ann.php?newsid={$row['newsid']}'>{$row[1]}</a></td>
                            <td>{$row[3]}</td>
                            <td>{$row[4]}</td>
                        </tr>";
                }
                ?>
            </table>
        </div>

    </div>

</body>

</html>