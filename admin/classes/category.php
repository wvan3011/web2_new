<?php
    $filepath = realpath(dirname(__FILE__));
    include_once $filepath.'/../lib/database.php';
?>

<?php
    class category {
        public $db;
        private $fm;
        public function __construct(){
            $this->db = new Database();
        }

        public function get_category($limit = 0, $index = 0) {
            $query = "
                SELECT *
                FROM category c
                ORDER BY c.id DESC
            ";
            if ($limit != 0) {
                $query = $query.' LIMIT '.$index.','.$limit;
            }
            $result = $this->db->select($query);
            return $result; 
        }
    }
?>