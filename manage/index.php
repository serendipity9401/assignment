<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>公告</title>
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
      /* height: 100vh; */
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
      /* margin-bottom: 30px; */
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
    }

    input[type="text"],
    input[type="date"] {
      width: 93%;
      margin-top: 5px;
      /* padding: 10px; */
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      font-size: 17px;
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
      /* padding: 10px 15px; */
      border-radius: 4px;
      margin-top: 10px;
      cursor: pointer;
      /* width: 100%; */
    }


    button:hover {
      background-color: #45a049;
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
      width: 70%;
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
    <h1><a href="main.php">首頁</a></h1>
  </nav>

  <table class="section">
    <tr align="center">
      <th>公告編號</th>
      <th>公告標題</th>
      <th>公告日期</th>
      <th>公告標籤</th>
      <th>功能</th>
    </tr>
    <?php
    echo "<h1>公告一覽</h1>";

    $link = mysqli_connect('localhost', 'root', '12345678', 'school');
    $sql = "select * from manage";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>
          <td>{$row[0]}</td>
          <td><a href='/期中作業/ann.php?newsid={$row['newsid']}'>{$row[1]}</a></td>
          <td>{$row[3]}</td>
          <td>{$row[4]}</td>
          <td>
            <a href='update.php?newsid={$row['newsid']}'>修改</a>
            <a href='dblink.php?method=delete&newsid={$row['newsid']}'>刪除</a>
          </td>
        </tr>";
    }
    echo "<div style='text-align: center; margin-top: 10px;'>
    <a href='news.php' style='display: inline-block;
        background-color: #4caf50;
        color: white;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 4px;
        font-size: 16px;
        margin-bottom:20px;
    '>新增公告</a>
  </div>";
    ?>
  </table>

  <!-- <h2>公告</h2> -->
  <!-- <form method="POST" action="success.php">
    <table class="RedList" align="center" width="40%">
      <tr>
        <td>公告編號</td>
        <td><input type="text" name="newsid" required></td>
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
        <td>公告時間</td>
        <td><input type="date" name="newsdate" required></td>
      </tr>
    </table>
    <button type="submit" name="but" value="up">新增公告</button>
  </form> -->

</body>

</html>