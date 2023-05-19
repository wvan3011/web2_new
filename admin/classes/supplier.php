<?php
    $filepath = realpath(dirname(__FILE__));
    include_once $filepath.'/../lib/database.php';
?>

<?php
    class supplier {
        public $db;
        public function __construct() {
            $this->db = new Database();
        }

        public function get_supplier($limit = 0, $index = 0) {
            $query = "
                SELECT *
                FROM supplier s
                ORDER BY s.id DESC
            ";
            if ($limit != 0) {
                $query = $query.' LIMIT '.$index.','.$limit;
            }
            $result = $this->db->select($query);
            return $result; 
        }
    }
?>