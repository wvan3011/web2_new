<?php
    include '../classes/phone.php';
    function run() {
        if (!isset($_GET['by_catid']) || !$_GET['by_catid']) {
            return '';
        }
    
        $cat_id = $_GET['by_catid'];
    
        $phone = new phone();
        $get_phone = $phone->get_phone_by_cat($cat_id);
        if (!$get_phone) {
            return '';
        }
        $data = $get_phone->fetch_all(MYSQLI_ASSOC);
        return json_encode($data);
    }

    echo run();

?>