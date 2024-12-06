<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>實習資料</title>
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
            background: rgba(0, 0, 0, 0.8);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width:100% ;
        }

        .navbar-brand {
            font-size: 1.5rem;
            color: #fff !important;
        }
      h1{
        margin-top: 30px;
      }


    .section {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 47%;
      margin-top: 20px;
    }

    .section h2 {
      color: #333;
      margin-bottom: 20px;
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

    caption {
      margin: 10px;
    }

    .section-btn {
      display: inline-block;
      background-color: #4caf50;
      color: white;
      text-decoration: none;
      padding: 10px 15px;
      border-radius: 4px;
      font-size: 16px;
      margin-top: 10px;
    }

    .section-btn:hover {
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
          echo "<button type='button' class='btn btn-primary' onclick='window.location.href='login/login.html'>登入</button>";
        }
        ?>
      </div>
    </div>
  </nav>
  <h1>實習資料管理</h1>

  <div class="section">
    
    <h2 align="center">實習資料一覽</h2>
    <table class="table-primary  table-bordered table-hover align-middle">
      <tr align="center">
        <th>學生名稱</th>
        <th>企業名稱</th>
        <th>開始日期</th>
        <th>結束日期</th>
        <th>功能</th>
      </tr>
      <?php
      $link = mysqli_connect('localhost', 'root', '12345678', 'school');
      $sql = "SELECT * FROM teacher";
      $result = mysqli_query($link, $sql);
      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>
            <td>{$row[0]}</td>
            <td>{$row[1]}</td>
            <td>{$row[2]}</td>
            <td>{$row[3]}</td>
            <td>
              <a href='update.php?student={$row['student']}' class='section-btn'>修改</a>
              <a href='dblink.php?method=delete&student={$row['student']}' class='section-btn'>刪除</a>
            </td>
          </tr>";
      }
      ?>
    </table>
    <div style="text-align: center;">
      <a href="inter.php" class="section-btn">新增實習資料</a>
    </div>
  </div>

</body>

</html>