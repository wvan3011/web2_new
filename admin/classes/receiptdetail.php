<?php
    $filepath = realpath(dirname(__FILE__));
    include_once $filepath.'/../lib/database.php';
    class receiptdetail {
        public $db;
        public function __construct(){
            $this->db = new Database();
        }

        public function insert_receiptdetail($receiptId, $variantId, $quantity, $price) {
            $query = "INSERT INTO receiptdetail(receiptID, variantID, quantity, price) VALUES('$receiptId', '$variantId', '$quantity', '$price')";
            $result = $this->db->insert($query);
            return $result;
        }
    }
?>