<?php require("product/data.php");?>
<?php require("ui/keranjang-view.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link rel="stylesheet" href="asset/css/styles.css">
    <link rel="stylesheet" href="asset/css/keranjang.css">
</head>
<body>
<?php require("ui/sidebar.php");?>
<div style="min-height : 100vh; ">
    <?php require("ui/navbar.php");?>
    <div class="whistlist">
        <h1>Daftar Keranjang (<?=count($data_barang)?>) </h1>
        <?php foreach($data_barang as $data) {
            listView($data["nama"], $data["deskripsi"]);
        }?>
    </div>
</div>
<?php require("ui/footer.php");?>
</body>
<script src="asset/js/script.js"></script>
</html>