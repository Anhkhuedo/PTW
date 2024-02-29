<?php

session_start();
// Xóa giá trị trong Session

unset($_SESSION['user']);
unset($_SESSION['fullname']);
unset($_SESSION['id']);

// Xóa session
session_destroy();
//Chuyển về trang dang nhap
header('Location: login.php');
?>
