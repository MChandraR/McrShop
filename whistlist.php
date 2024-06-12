<?php require("product/data.php");?>
<?php require("ui/whistlist-view.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link rel="stylesheet" href="asset/css/styles.css">
    <link rel="stylesheet" href="asset/css/whistlist.css">
</head>
<body>
<?php require("ui/sidebar.php");?>
<div style="min-height : 100vh; ">
    <?php require("ui/navbar.php");?>
    <h1 style="margin : 2rem 1rem 0 1rem;     font-family: Arial, Helvetica, sans-serif;">Daftar Whistlist (<?=count($data_barang)?>) </h1>
    <div class="whistlist">
        <?php foreach($data_barang as $data) {
            listView($data["nama"], $data["deskripsi"]);
        }?>
    </div>
</div>
<?php require("ui/footer.php");?>
</body>
<script src="asset/js/script.js"></script>
</html>