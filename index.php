<?php require("product/data.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/styles.css">
</head>

<body>
    <div style="min-height:100vh;">
        <?php require("ui/sidebar.php");?>

        <div class="top_content">
            <?php require("ui/navbar.php"); ?>
            <div class="content" style="align-items : center; justify-items:center; display :flex; padding:15vh 0;">
                <div style="float:left; width:55vw;" >
                    <h1 class="txt-putih pdl-2 pdt-2" style="font-size:3rem; ">TEMUKAN BERBAGAI 
                        <br>PRODUK IMPIANMU</h1>
                </div>
                <div style="background-color:rgba(255,255,255,.6);height:100%;width:45vw;float:left; box-shadow:0 0 2px 2px  rgb(240, 240, 240); padding:1rem; margin:3rem; border-radius:10px;">
                    <img src="asset/images/shops.png" style="background-color:rgba(255,255,255,.7);width:2rem; margin:1rem; box-shadow:1px 1px 2px 2px rgb(170, 169, 169); border-radius:5px; padding:5px;" alt="">
                    <img src="asset/images/cart.png" style="background-color:rgba(255,255,255,.7);width:2rem; margin:1rem; box-shadow:1px 1px 2px 2px rgb(170, 169, 169); border-radius:5px; padding:5px;" alt="">
                    <img src="asset/images/wishlist.png" style="background-color:rgba(255,255,255,.7);width:2rem; margin:1rem; box-shadow:1px 1px 2px 2px rgb(170, 169, 169); border-radius:5px; padding:5px;" alt="">
                    <img src="asset/images/event.png" style="background-color:rgba(255,255,255,.7);width:2rem; margin:1rem; box-shadow:1px 1px 2px 2px rgb(170, 169, 169); border-radius:5px; padding:5px;" alt="">
                    <img src="asset/images/food.png" style="background-color:rgba(255,255,255,.7);width:2rem; margin:1rem; box-shadow:1px 1px 2px 2px rgb(170, 169, 169); border-radius:5px; padding:5px;" alt="">
                    <img src="asset/images/wallet.png" style="background-color:rgba(255,255,255,.7);width:2rem; margin:1rem; box-shadow:1px 1px 2px 2px rgb(170, 169, 169); border-radius:5px; padding:5px;" alt="">
                    <img src="asset/images/refresh.png" style="background-color:rgba(255,255,255,.7);width:2rem; margin:1rem; box-shadow:1px 1px 2px 2px rgb(170, 169, 169); border-radius:5px; padding:5px;" alt="">
                    <img src="asset/images/flash-sale.png" style="background-color:rgba(255,255,255,.7);width:2rem; margin:1rem; box-shadow:1px 1px 2px 2px rgb(170, 169, 169); border-radius:5px; padding:5px;" alt="">
                    <img src="asset/images/offer.png" style="background-color:rgba(255,255,255,.7);width:2rem; margin:1rem; box-shadow:1px 1px 2px 2px rgb(170, 169, 169); border-radius:5px; padding:5px;" alt="">
                    <img src="asset/images/joystick.png" style="background-color:rgba(255,255,255,.7);width:2rem; margin:1rem; box-shadow:1px 1px 2px 2px rgb(170, 169, 169); border-radius:5px; padding:5px;" alt="">
                </div>
            </div>
        </div>
       

        <div style="padding: 0 2vw; margin : 10vh 0;">
            <div style="width:100;  box-shadow: 0px 2px 0px 0px rgb(175, 175, 175);font-family:Arial, Helvetica, sans-serif; font-size:2rem; margin-bottom:1rem; font-weight:bold;">Produk</div>
            <div style=" display:table-row-group; ">
                <button style="box-shadow: 0 0 2px 2px rgb(223, 223, 223); border:none; background-color:rgb(255, 255, 255); border-radius:2rem; padding: .3rem 1rem; font-size:1.2rem; margin-right:.5rem;">Elektronik</button>
                <button style="box-shadow: 0 0 2px 2px rgb(223, 223, 223); border:none; background-color:rgb(255, 255, 255); border-radius:2rem; padding: .3rem 1rem; font-size:1.2rem; margin-right:.5rem;">Kecantikan</button>
                <button style="box-shadow: 0 0 2px 2px rgb(223, 223, 223); border:none; background-color:rgb(255, 255, 255); border-radius:2rem; padding: .3rem 1rem; font-size:1.2rem; margin-right:.5rem;">Makanan</button>
            </div>
            <div style="padding:6vh 0; overflow-y: auto;">
                <?php
                $i =0;
                foreach($data_barang as $data){?>
                <div style="display:table-cell; font-family: Arial, Helvetica, sans-serif;">
                <div style="margin-right : 1rem;  width:12rem; height: 12rem;  padding-bottom: 1rem; box-shadow: 0 0 2px 2px rgb(223, 223, 223); border-radius:10px; ">
                    <img src="asset/images/barang.png" style="object-fit : cover;width:12rem; height:6rem; border-radius: 10px 10px 0 0;" alt="">
                    <div style="display:grid;  padding: .5rem .5rem;">
                        <span><b><?=$data["nama"]?></b></span>
                        <span><?=$data["kategori"]?> </span>
                        <div style="width: 100%; display:flex; justify-content:end; padding-top:1rem; ">
                            <a href="product?id=123"><button class="btn" >Beli</button></a>
                        </div>
                    </div>
                </div>
                </div>
                <?php } ?>
                
            </div>
        </div>


        <div style="padding: 0 2vw; margin : 10vh 0;">
            <div style="width:100;  box-shadow: 0px 2px 0px 0px rgb(175, 175, 175);font-family:Arial, Helvetica, sans-serif; font-size:2rem; margin-bottom:1rem; font-weight:bold;">Promo</div>
            <div style=" display:table-row-group; ">
                <button style="box-shadow: 0 0 2px 2px rgb(223, 223, 223); border:none; background-color:rgb(255, 255, 255); border-radius:2rem; padding: .3rem 1rem; font-size:1.2rem; margin-right:.5rem;">Flash sale</button>
                <button style="box-shadow: 0 0 2px 2px rgb(223, 223, 223); border:none; background-color:rgb(255, 255, 255); border-radius:2rem; padding: .3rem 1rem; font-size:1.2rem; margin-right:.5rem;">Ramadhan</button>
                <button style="box-shadow: 0 0 2px 2px rgb(223, 223, 223); border:none; background-color:rgb(255, 255, 255); border-radius:2rem; padding: .3rem 1rem; font-size:1.2rem; margin-right:.5rem;">Makanan</button>
            </div>

            <div style="padding:6vh 0; overflow-y: auto;">
                <?php
                $i =0;
                for($i = 0 ; $i< 10;$i++){?>
                <div style="display:table-cell;">
                <div style="margin-right : 1rem;  width:12rem; height: 12rem;  padding-bottom: 1rem; box-shadow: 0 0 2px 2px rgb(223, 223, 223); border-radius:10px; ">
                    <img src="asset/images/barang.png" style="object-fit : cover;width:12rem; height:6rem; border-radius: 10px 10px 0 0;" alt="">
                    <div style="display:grid;  padding: .5rem .5rem;">
                        <span>Nama produk</span>
                        <span>Harga </span>
                        <div style="width: 100%;  display:flex; justify-content:end; padding-top:1rem; ">
                            <button class="btn" >Beli</button>
                        </div>
                    </div>
                </div>
                </div>
                <?php } ?>
                
            </div>
        </div>
        
    </div>
    <?php require("ui/footer.php"); ?>
</body>
<script src="asset/js/script.js"></script>
</html>