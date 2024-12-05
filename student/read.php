<?php
$sid = $_GET['sid'];
$link = mysqli_connect('localhost', 'root', '12345678', 'school');
$sql = "select * from student where sid='$sid'";
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $filedata = "file/{$row['file']}";
    header("Content-Type: enctype='multipart/form-data'");
    header('Content-Disposition: attachment; filename=' . $row['file']);
    readfile($filedata);
}
