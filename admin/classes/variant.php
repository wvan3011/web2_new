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
    }
?>