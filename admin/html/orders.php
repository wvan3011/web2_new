<?php
require_once("../SQL/connection.php");
require_once("./auth-check-login.php");
$user = $_SESSION["user"];
$page = 1;
$fillStatus = 0;
if (isset($_GET["page"])) $page = $_GET["page"];
$fromDay = "2023-01-01";
$toDay = date('Y-m-d');
$address = "";
if (isset($_GET['from'])) {
    $fromDay = $_GET['from'];
}
if (isset($_GET['to'])) {
    $toDay = $_GET['to'];
}
if (isset($_GET["address"])) {
    $address = $_GET["address"];
}
$query = "SELECT * FROM `order` where (`date` BETWEEN '" . $fromDay . "' AND '" . $toDay . "') AND address like '%" . $address . "%'";
if (isset($_GET["status"]) && $_GET["status"] != 0) {
    $fillStatus = $_GET["status"];
    $query = "SELECT * FROM `order` where orderStatus ='" . ($_GET["status"] - 1) . "' and (`date` BETWEEN '" . $fromDay . "' AND '" . $toDay . "') AND address like '%" . $address . "%'";
}
$orders = [];
$dem = 0;
$n = 10;
$start = ($page - 1) * $n;
$end = $page * $n;
//for ($i = 0; $i < 100; $i++) {
$rs = $con->query($query);
if ($rs->num_rows > 0) {
    while ($r = $rs->fetch_assoc()) {
        if ($dem >= $start && $dem < $end) {
            $orders[] = $r;
        }
        $dem++;
    }
}
//}
$con->close();
if ($dem % $n > 0)
    $totalPages = (int)($dem / $n) + 1;
else $totalPages = (int)($dem / $n);
$totalPages;
require_once "./orders_view.php";