<?php
if ($_SESSION['level'] == "同學") {
    header('Location:student\student.php');
} elseif ($_SESSION['level'] == "祕書") {
    header('Location:teacher\teacher.php');
} elseif ($_SESSION['level'] == "管理員") {
    header('Location:manage\index.php');
}
?>