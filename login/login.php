<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>登入-產業實習平台</title>
  <link rel="stylesheet" />
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url("home-bg.jpg");
      background-size: cover;
      background-position: center;
      margin: 0;
      padding: 0;
      height: auto;
      display: flex;
      justify-content: center;
      align-items: center;
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
      /* 內邊距 */
      text-align: center;
      /* 文字置中 */
      font-size: 1.8em;
      /* 字體大小 */
      color: white;
      /* 文字顏色 */
    }

    nav a {
      color: white;
      /* 連結文字顏色 */
      text-decoration: none;
      /* 移除底線 */
    }

    nav a:hover {
      color: #4caf50;
      /* 滑鼠懸停變色 */
      transition: color 0.3s ease;
      /* 平滑變色效果 */
    }

    header h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.9);
      /* 增加背景透明度 */
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 500px;
      width: 100%;
      text-align: center;
      margin-top: 100px;
    }

    .section h2 {
      font-size: 1.5rem;
      margin-bottom: 20px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      font-size: 1.1rem;
      margin-bottom: 5px;
    }

    input,
    select,
    button {
      font-size: 1rem;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      width: 100%;
    }

    button {
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button a {
      color: black;
      text-decoration: none;
    }
    button:hover {
      background-color: #13ee22;
    }

    ul {
      display: flex;
      justify-content: center;
      padding: 0;
    }

    ul li {
      list-style: none;
      margin-right: 15px;
    }

    ul li a {
      padding: 10px 20px;
      text-decoration: none;
      color: white;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .login-button {
      font-size: 1rem;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      width: 100%;
      cursor: pointer;
      transition: background-color 0.3s ease;
      text-align: center;
      color: black;
      text-decoration: none;
    }

    .login-button:hover {
      background-color: #13ee22;
    }
  </style>
</head>

<body>
  <nav>
    <h1><a href="main.php">首頁</a></h1>
  </nav>
  <!-- <a href="login.php" class="login-button">vup </a> -->
  <div class="container">
    <header>
      <h1>登入-產業實習平台</h1>
    </header>
    <main>
      <div class="section">
        <h2>請輸入您的帳號及密碼</h2>
        <form method="POST" action="login1.php">
          <label for="username">使用者編號:</label>
          <input type="text" id="ID" name="ID" required />

          <label for="password">密碼:</label>
          <input type="password" id="password" name="password" required />

          <!-- <label for="role">身份:</label>
          <select id="role" name="role" required>
            <option value="admin">管理者</option>
            <option value="department">系所秘書</option>
            <option value="student">學生</option>
          </select> -->
          <h3>選擇想訂閱的公告標籤:</h3>
          <label>製造業
            <input type="checkbox" id="tags" name="tags" value="製造業">
          </label>
          <label>服務業
            <input type="checkbox" id="tags" name="tags" value="服務業">
          </label>
          <label>500大企業
            <input type="checkbox" id="tags" name="tags" value="500大企業">
          </label>
          <button type="submit">登入</button>
          <a href="new.html" class="login-button">新增使用者</a>
        </form>
        <?php
        // session_start();
        // $session['tags'];
        ?>
      </div>
    </main>

  </div>

</body>

</html>