<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>產業實習平台</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('home-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }

        nav {
            background: rgba(0, 0, 0, 0.8);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.5rem;
            color: #fff !important;
        }

        .container h1 {
            margin-top: 20px;
            text-align: center;
            color: black;
            /* text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7); */
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            border: none;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #ddd;
        }

        td,
        th {
            text-align: center;
            padding: 10px;
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

    <div class="container">
        <h1>產業實習平台</h1>
        <div class="card mt-4 shadow-lg">
            <div class="card-body">
                <h2 class="card-title text-center">公告一覽</h2>
                <div class="table-responsive">
                    <table class="table-primary  table-bordered table-hover align-middle">
                        <thead class="table ">
                            <tr>
                                <th>公告編號</th>
                                <th>公告標題</th>
                                <th>公告日期</th>
                                <th>公告標籤</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $tags = $_SESSION['tags'];
                            $link = mysqli_connect('localhost', 'root', '12345678', 'school');
                            $sql = "SELECT * FROM manage ORDER BY CASE WHEN tags ='$tags' THEN 1 ELSE 2 END";
                            $result = mysqli_query($link, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>
                                        <td>{$row[0]}</td>
                                        <td><a class='btn btn-link' href='ann.php?newsid={$row['newsid']}'>{$row[1]}</a></td>
                                        <td>{$row[3]}</td>
                                        <td>{$row[4]}</td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>