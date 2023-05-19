<?php
    $filepath = realpath(dirname(__FILE__));
    include_once $filepath.'/../lib/database.php';
    include_once $filepath.'/../classes/receipt.php';
    include_once $filepath.'/../classes/receiptdetail.php';
    include_once $filepath.'/../classes/variant.php';
?>

<?php
    $db = new Database();
    $rec = new receipt();
    $var = new variant();
    $recdetail = new receiptdetail();
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode($_POST['data'], TRUE);

        $supId = $data['supplier'];
        $emp = $data['employee'];
        $total = $data['total'];

		$recId = $rec->insert_receipt($supId, $emp, $total);

        foreach($data['details'] as $x => $val) {
            $recdetail->insert_receiptdetail($recId, $val['variant'], $val['quantity'], $val['price']);
            $var->update_quantity_by_id($val['quantity'], $val['variant']);
        }
    }

    echo 'ok';
?>