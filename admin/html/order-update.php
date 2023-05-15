<?php
require_once "./auth-check-login.php";
require_once("../SQL/connection.php");
if (isset($_POST["id"]) && isset($_POST["status"])) {
    $sql = "UPDATE `order` SET `orderStatus` = '" . $_POST["status"] . "', employeeEmail='".$_SESSION["user"]["email"]."' WHERE `order`.`id` = " . $_POST["id"];
    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}