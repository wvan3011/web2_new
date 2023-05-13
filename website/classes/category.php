<?php
    $filepath = realpath(dirname(__FILE__));
    include_once $filepath.'/../lib/database.php';
    include_once $filepath.'/../helpers/format.php';
?>

<?php
    class category {
        public $db;
        private $fm;
        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function get_category() {
            $query = "SELECT * FROM category ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function get_category_have_product() {
            $query = "
                SELECT * 
                FROM category c
                INNER JOIN (
                    SELECT category
                    FROM phone
                    GROUP BY category
                ) a ON a.category = c.id
                ORDER BY c.id DESC
            ";
            $result = $this->db->select($query);
            return $result;
        }


        public function getcatbyId($id) {
            $query = "SELECT * FROM category WHERE id = '$id'";
            $result = $this->db->select($query);
            return $result;
        }

        public function getcatbyName($name) {
            $query = "SELECT * FROM category WHERE name = '$name'";
            $result = $this->db->select($query);
            return $result;
        }
    }
?>