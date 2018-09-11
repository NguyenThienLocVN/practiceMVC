<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Show Database</title>
</head>
<body>

<div>
        <!-- Table fetch data -->
        <table style="text-align:center; border:1px; width:300px;">
            <tr>
                <th>ID</th>
                <th>Name Product</th>
                <th>Amount</th>
            </tr>


            <?php foreach($product as $val){ ?>
            <tr>
                <td><?php echo $val['id']; ?></td>
                <td><?php echo $val['name_product']; ?></td>
                <td><?php echo $val['amount']; } ?></td>
            </tr>
        </table>
        <p>Page rendered in <strong>{elapsed_time}</strong> seconds.
</div>

</body>
</html>