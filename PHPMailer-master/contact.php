<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="sendMail.php">
    <fieldset>
    <legend>留言給我們</legend>
    <label>您的大名：</label>
    <input name="C_name" type="text" />
    <br />

    <label>您的Email：</label>
    <input name="C_email" type="text" />
    <br />

    <label>您的電話號碼：</label>
    <input name="C_tel" type="text" />
    <br />

    <label>您的寶貴意見：</label>
    <textarea name="C_message"></textarea>
    <br />

    <input  name="submit" type="submit" value="確定送出" />
    </fieldset>
    
</body>
</html>