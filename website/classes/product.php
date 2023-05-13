<?php
    $filepath = realpath(dirname(__FILE__));
    include_once $filepath.'/../lib/database.php';
?>

<?php
    class product {
        public $db;
        public function __construct(){
            $this->db = new Database();
        }

        public function getproduct_new($limit=0, $index=0) {
            $query = "
                SELECT p.*, i.image, v.price
                FROM phone p
                INNER JOIN image i ON p.id = i.phoneID
                INNER JOIN variant v ON p.id = v.phoneID
                INNER JOIN (
                    SELECT id
                    FROM image
                    GROUP BY phoneID
                ) c ON i.id = c.id
                INNER JOIN (
                    SELECT id
                    FROM variant
                    GROUP BY phoneID 
                ) d ON v.id = d.id
                WHERE visible = 1
                ORDER BY p.id DESC
            ";
            if ($limit != 0) {
                $query = $query.' LIMIT '.$index.','.$limit;
            }
            $result = $this->db->select($query);
            return $result; 
        }

        public function get_product_by_cat($catid, $limit=0, $index=0) {
            $query = "
                SELECT p.*, i.image, v.price
                FROM phone p
                INNER JOIN image i ON p.id = i.phoneID
                INNER JOIN variant v ON p.id = v.phoneID
                INNER JOIN (
                    SELECT id
                    FROM image
                    GROUP BY phoneID
                ) c ON i.id = c.id
                INNER JOIN (
                    SELECT id
                    FROM variant
                    GROUP BY phoneID 
                ) d ON v.id = d.id
                WHERE visible = 1 AND category = '$catid'
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