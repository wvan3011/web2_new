<?php
require_once("connection.php");
function getEmployeeByEmailAndPassword($con, $email, $password)
{
    $sql = "select * from employee where email='$email' and password='$password';";
    $rs = $con->query($sql);
    if ($rs->num_rows > 0) {
        return $rs->fetch_assoc();
    }
    return null;
}
