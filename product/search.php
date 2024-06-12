<?php require("data.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/styles.css">
    <link rel="stylesheet" href="../asset/css/search.css">
</head>
<body>
<?php require("../ui/sidebar.php");?>

<div style="min-height : 100vh;">
<?php require("../ui/navbar.php");?>

<div class="result-area">
    <div class="filter-card">
        <span><b>Filter</b></span><br>
        <hr>
        <input type="checkbox" name="" id=""> Elektronik </input><br>
        <input type="checkbox" name="" id=""> Makanan </input><br>
        <input type="checkbox" name="" id=""> Aksesoris </input><br>
        <hr>
        <input type="checkbox" name="" id=""> Pre-order </input><br>
        <input type="checkbox" name="" id=""> Grosir </input><br>
    </div>
    <div style="result">
        <div style="width:100;  font-family:Arial, Helvetica, sans-serif; font-size:2rem;  font-weight:bold;">Hasil pencarian - "<?=(isset($_GET["key"])) ? $_GET["key"] : "-" ?>"</div>
            <hr>
            <div >
                <button style="box-shadow: 0 0 2px 2px rgb(223, 223, 223); border:none; background-color:rgb(255, 255, 255); border-radius:2rem; padding: .3rem 1rem; font-size:1.2rem; margin-right:.5rem;">Produk</button>
                <button style="box-shadow: 0 0 2px 2px rgb(223, 223, 223); border:none; background-color:rgb(255, 255, 255); border-radius:2rem; padding: .3rem 1rem; font-size:1.2rem; margin-right:.5rem;">Toko</button>
            </div>
            <div style="padding:3vh 0; overflow-y: auto; display:flex; flex-wrap: wrap; " >
                <?php
                $i =0;
                foreach($data_barang as $data){
                    $key = isset($_GET["key"]) ? $_GET["key"] : "";
                    if(!str_contains(strtolower($data["nama"]), strtolower($key))) continue;
                    ?>
                <div>
                <div style="margin: 0 1.5rem 2rem 0; width:12rem; height: 12rem;  padding-bottom: 1rem; box-shadow: 0 0 2px 2px rgb(223, 223, 223); border-radius:10px; ">
                    <img src="../asset/images/barang.png" style="object-fit : cover;width:12rem; height:6rem; border-radius: 10px 10px 0 0;" alt="">
                    <div style="display:grid;  padding: .5rem .5rem;">
                        <span><b><?=substr($data["nama"], 0 ,20)?></b></span>
                        <span>Harga </span>
                        <div style="width: 100%; display:flex; justify-content:end; padding-top:1rem; ">
                            <a href="./?id=123"><button class="btn" >Beli</button></a>
                        </div>
                    </div>
                </div>
                </div>
                <?php } ?>
                
            </div>
        </div>
    </div>

</div>

<?php require("../ui/footer.php");?>
</body>
<script src="../asset/js/script.js"></script>
</html>