<?php
    $filepath = realpath(dirname(__FILE__));
    include_once $filepath.'/../lib/database.php';
    class receipt {
        public $db;
        public function __construct(){
            $this->db = new Database();
        }

        public function insert_receipt($supId, $emp, $total) {
            $query = "INSERT INTO receipt(supplierID, employeeEmail, totalPayment, date) VALUES('$supId', '$emp', '$total', CURDATE())";
            $this->db->insert($query);
            $result = $this->db->link->insert_id;
            return $result;
        }
    }
?>