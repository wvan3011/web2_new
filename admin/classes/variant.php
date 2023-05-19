<?php
    $filepath = realpath(dirname(__FILE__));
    include_once $filepath.'/../lib/database.php';
    class variant {
        public $db;
        public function __construct(){
            $this->db = new Database();
        }

        public function get_variant_by_phone($phoneid, $limit=0, $index=0) {
            $query = "
                SELECT v.*, c.color
                FROM variant v
                INNER JOIN color c ON v.phoneID = c.phoneID AND v.colorID = c.colorID
                WHERE v.phoneID = '$phoneid'
                ORDER BY v.id DESC
            ";
            if ($limit != 0) {
                $query = $query.' LIMIT '.$index.','.$limit;
            }
            $result = $this->db->select($query);
            return $result; 
        }

        public function update_quantity_by_id($quantity, $id) {
            $query = "UPDATE variant SET quantity = quantity + '$quantity' WHERE id = '$id'";
            $result = $this->db->update($query);

            return $result;
        }

        public function get_inventory_by_phone($phoneid, $date, $limit=0, $index=0) {
            $query = "
                SELECT v.id, v.size, c.color, (v.quantity - COALESCE(r2.nhap_q, 0) + COALESCE(o2.ban_q, 0)) quantity
                FROM variant v
                LEFT JOIN (
                    SELECT v.id, SUM(r.quantity) nhap_q
                    FROM variant v
                    JOIN receiptdetail r ON v.id = r.variantID
                    JOIN receipt rec ON r.receiptID = rec.id
                    WHERE v.phoneID = '$phoneid'
                    AND rec.date > '$date'
                ) r2 ON v.id = r2.id
                LEFT JOIN (
                    SELECT v.id, SUM(o.quantity) ban_q
                    FROM variant v
                    JOIN orderdetail o ON v.id = o.variantID
                    JOIN `order` ord ON o.orderID = ord.id
                    WHERE v.phoneID = '$phoneid'
                    AND ord.date > '$date'
                ) o2 ON v.id = o2.id
                JOIN color c ON v.phoneID = c.phoneID AND v.colorID = c.colorID
                WHERE v.phoneID = '$phoneid'
            ";
            if ($limit != 0) {
                $query = $query.' LIMIT '.$index.','.$limit;
            }
            $result = $this->db->select($query);
            return $result; 
        }
    }
?>