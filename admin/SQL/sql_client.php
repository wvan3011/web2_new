<?php 
require_once("connection.php"); 
function get_all_email_customer() {
    $query = "SELECT email FROM customer";
    return $query;
}

function get_all_account_customer() {
    $query = "SELECT email,password FROM customer";
    return $query;
}

?>