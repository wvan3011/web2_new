<?php
    $filepath = realpath(dirname(__FILE__));
    include_once $filepath.'/../lib/database.php';
    class phone {
        public $db;
        public function __construct(){
            $this->db = new Database();
        }

        public function get_phone_by_cat($catid, $limit=0, $index=0) {
            $query = "
                SELECT *
                FROM phone p
                WHERE category = '$catid'
                ORDER BY p.id DESC
            ";
            if ($limit != 0) {
                $query = $query.' LIMIT '.$index.','.$limit;
            }
            $result = $this->db->select($query);
            return $result; 
        }
    }
?>