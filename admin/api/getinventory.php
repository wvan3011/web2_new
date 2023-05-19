<?php
    include '../classes/variant.php';
    function run() {

        if (!isset($_GET['by_phoneid']) || !$_GET['by_phoneid']) {
            return '';
        }

        if (!isset($_GET['date']) || !$_GET['date']) {
            return '';
        }
    
        $phone_id = $_GET['by_phoneid'];
        $date = $_GET['date'];
    
        $variant = new variant();
        $get_variant = $variant->get_inventory_by_phone($phone_id, $date);
        if (!$get_variant) {
            return '';
        }
        $data = $get_variant->fetch_all(MYSQLI_ASSOC);
        return json_encode($data);
    }

    echo run();

?>