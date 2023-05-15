<?php
require_once "./auth-check-login.php";
require_once("../SQL/connection.php");
if (isset($_GET["id"])) {
    $sql = "SELECT p.name AS phone, c.color, v.price, od.quantity, (v.price * od.quantity) AS total_price
FROM orderdetail od
         JOIN variant v ON od.variantID = v.id
         JOIN color c ON v.colorID = c.id
         JOIN phone p ON v.phoneID = p.id
WHERE od.orderID=
" . $_GET["id"];
    $rs = $con->query($sql);
    $data = [];
    if ($rs->num_rows > 0) {
        while ($r = $rs->fetch_assoc()) {
            $data[] = $r;
        }
    }
    echo json_encode($data);
}