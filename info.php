<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link rel="stylesheet" href="asset/css/styles.css">
    <link rel="stylesheet" href="asset/css/info.css">
</head>
<body>
<?php require("ui/sidebar.php");?>
<div style="min-height : 100vh; ">
    <?php require("ui/navbar.php");?>
    <div class="info-container">
        <img src="asset/images/barang.png" alt="" style="width:6rem;">
        <h1>Selalu memberikan yang terbaik bagi pengguna</h1>
        <p>ShopI merupakan online e-commerce yang berfokus pada penjualan produk lokal yang bertujuan untuk memajukan sektor perekonomian indonesia</p>
        <div class="feature">
            <div class="feature-item">
                <img src="asset/images/icon/clock.png" alt="" style="width:2rem; margin-right:10px;">
                <span>24 Jam  <br> Pelayanan</span>
            </div>
            <div class="feature-item">
                <img src="asset/images/icon/shield.png" alt="" style="width:2rem; margin-right:10px;">
                <span>Jaminan  <br> Produk</span>
            </div>
            <div class="feature-item">
                <img src="asset/images/icon/guarantee.png" alt="" style="width:2rem; margin-right:10px;">
                <span>Garansi  <br> Produk</span>
            </div>
        </div>
        <br><br><hr>
        <h1>Creator</h1>
        <img src="asset/images/creator.jpeg" alt="" style="width:10rem;"><br>
        <span><b>Muhammad Chandra Ramadhan</b></span><br>
        <span>Engineering student of </span><br>
        <span>Maritim Raja Ali Haji University </span><br><br>
    </div>
</div>
<?php require("ui/footer.php");?>
</body>
<script src="asset/js/script.js"></script>
</html>