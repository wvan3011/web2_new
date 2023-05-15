<?php
session_start();
require_once("../SQL/XuLyQuanTri.php");
if (isset($_SESSION["user"])) {
    if (getEmployeeByEmailAndPassword($con, $_SESSION["user"]["email"], $_SESSION["user"]["password"]) === null) {
        header("Location: ./auth-login-basic.php");//Chưa login
    } else {
        // Đã login
    }
} else {
    header("Location: ./auth-login-basic.php");
}
