<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>實習資料修改</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        body {
            background: url('home-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }

        nav {
            background: rgba(0, 0, 0, 0.8);
            background-color: rgba(0, 0, 0, 0.8);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.5rem;
            color: #fff !important;
        }
        



        .container-form {
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 30px;
            max-width: 700px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            font-size: 2rem;
            margin-bottom: 20px;
            color: black;
            border-bottom: 2px solid #4caf50;
            padding-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-custom {
            background-color: #4caf50;
            color: white;
            border-radius: 5px;
            padding: 10px 15px;
            width: 100%;
        }

        .btn-custom:hover {
            background-color: #45a049;
        }
        
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/homework/main.php">產業實習平台</a>
            <div class="d-flex">
                <?php
                if ($_SESSION['name']) {
                    echo "<span class='navbar-text text-white me-3'>您好，", $_SESSION['name'], $_SESSION['level'], "</span>";
                    echo "<a href='/homework/logout.php' class='btn btn-outline-danger me-2'>登出</a>";
                    echo "<a href='link.php' class='btn btn-outline-primary'>管理</a>";
                } else {
                    echo "<button type='button' class='btn btn-primary' onclick=\"window.location.href='login/login.html'\">登入</button>";
                }
                ?>
            </div>
        </div>
    </nav>


    <div class="d-flex justify-content-center align-items-center">
        <div class="container-form" style="width: 100%; max-width: 700px;">
            <h1 class="form-title" align="center">實習資料修改</h1>
            <?php
            $student = $_GET['student'];
            $link = mysqli_connect('localhost', 'root', '12345678', 'school');
            $sql = "SELECT DISTINCT * FROM teacher WHERE student='$student'";
            $result = mysqli_query($link, $sql);
            ?>
            <form method="POST" action="dblink.php">
                <div class="mb-3">
                    <label for="student" class="form-label">學生名稱</label>
                    <input type="text" class="form-control" name="student" id="student" readonly value="<?php echo $student; ?>">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">實習企業名稱</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>

                <div class="mb-3">
                    <label for="stime" class="form-label">實習開始日期</label>
                    <input type="date" class="form-control" name="stime" id="stime" required>
                </div>

                <div class="mb-3">
                    <label for="etime" class="form-label">實習結束日期</label>
                    <input type="date" class="form-control" name="etime" id="etime" required>
                </div>

                <button type="submit" class="btn btn-custom">修改資料</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>