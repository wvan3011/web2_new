<?php
    include '../classes/variant.php';
    function run() {
        if (!isset($_GET['by_phoneid']) || !$_GET['by_phoneid']) {
            return '';
        }
    
        $phone_id = $_GET['by_phoneid'];
    
        $variant = new variant();
        $get_variant = $variant->get_variant_by_phone($phone_id);
        if (!$get_variant) {
            return '';
        }
        $data = $get_variant->fetch_all(MYSQLI_ASSOC);
        return json_encode($data);
    }

    echo run();

?>