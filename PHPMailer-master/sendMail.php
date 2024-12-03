<?php
    require_once('PHPMailer-master\src\PHPMailer.php'); // 放你的檔案位置
    require_once('PHPMailer-master\src\SMTP.php'); // 放你的檔案位置
    require_once('PHPMailer-master\src\Exception.php'); // 放你的檔案位置

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    $C_name=$_POST['C_name'];
    $C_email=$_POST['C_email'];
    $C_tel=$_POST['C_tel'];
    $C_message=$_POST['C_message'];
    echo "姓名:".$C_name."<br />信箱:".$C_email."<br />電話:".$C_tel."<br />回應內容:".$C_message."<br/>";

    $mail= new PHPMailer();                          
    $mail->IsSMTP();                                    
    $mail->SMTPAuth = true;
    // $mail->SMTPDebug = 2; 
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com";             
    $mail->Port = 465;                                 
    $mail->CharSet = "utf-8";                       
    $mail->Username = "chesteras452@gmail.com";//寄件者信箱帳號
    $mail->Password = "tdgv cpxo htso vvsr";//寄件者信箱密碼
    
    

    $mail->From = "$C_email";//寄件者信箱 
    $mail->FromName = "$C_name";//寄件者姓名  
    $mail->Subject ="來自".$C_name."留言"; 
    $mail->Body = "姓名:".$C_name."<br />信箱:".$C_email."<br />電話:".$C_tel."<br />回應內容:".$C_message; 
    $mail->IsHTML(true);                             
    $mail->AddAddress("$C_email");            
    if(!$mail->Send()){
        echo "Error: " . $mail->ErrorInfo;
    }else{
        echo "<b>感謝您的留言，您的建議是我們前進的動力。</b>";
    }
?>