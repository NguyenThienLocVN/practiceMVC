<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome, CodeIgniter</title>
</head>
<body>

<div class="gallery">
    <ul>
        <?php foreach($images as $img){ ?>
            <li><img src="<?php echo $img['name']; ?>" style="width:100px;"></li>
        <?php } ?>
    </ul>
</div>

</body>
</html>