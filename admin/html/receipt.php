<?php
$sql = "SELECT (SELECT SUM(quantity) as total_quantity FROM variant where id = 1)
           + (SELECT SUM(od.quantity) as total_quantity_sold
              FROM variant v
                       JOIN orderdetail od ON v.id = od.variantID
                       JOIN `order` o ON o.id = od.orderID
              WHERE o.date > '2023-05-01' and v.id = 1)
           - (SELECT SUM(od.quantity) as total_quantity_sold
              FROM variant v
                       JOIN receiptdetail od ON v.id = od.variantID
                       JOIN `receipt` o ON o.id = od.receiptID
              WHERE o.date > '2023-05-01' and v.id = 1)";