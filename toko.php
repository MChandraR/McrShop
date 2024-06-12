<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/styles.css">
    <link rel="stylesheet" href="asset/css/toko.css">
</head>

<body>
    <div style="min-height:100vh;">
        <?php require("ui/sidebar.php");?>
        <?php require("ui/navbar.php"); ?>

        <div class="table-info">
            <div style="display: table-cell;">
                <div class="shop-card">
                    <img class="img-shop" src="asset/images/shop.png" alt="">
                </div>
            </div>
            <div class="shop-info">
               <table style="border-spacing : 10px .5rem;">
                <tr>
                    <td style="font-weight:bold;  width: 6rem;">Nama Toko</td>
                    <td>:</td>
                    <td>Mcr Store</td>
                </tr>
                <tr>
                    <td style="font-weight:bold; w width: max-content;">Level</td>
                    <td>:</td>
                    <td>Official</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;  width: max-content;">Rating</td>
                    <td>:</td>
                    <td>⭐4.5</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;  width: max-content;">Deskripsi</td>
                    <td>:</td>
                    <td style="display : inline-block ; overflow: auto;max-height: 10rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices euismod fringilla. Fusce sit amet enim urna. Nulla erat massa, fermentum at sodales ac, gravida id neque. Nullam egestas, metus in tristique sodales, nulla neque sodales arcu, sit amet pellentesque sem dolor a nisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec molestie eu metus non cursus. Morbi venenatis congue neque, vitae rhoncus purus dictum in. Phasellus volutpat auctor nunc, vel vehicula ante malesuada sit amet. Suspendisse potenti. Pellentesque laoreet ipsum quis blandit feugiat.</td>
                </tr>
               </table>
            </div>
          
        </div>

        <div style="padding: 0 2vw; margin : 2vh 0;">
            <div style="width:100;  box-shadow: 0px 2px 0px 0px rgb(175, 175, 175);font-family:Arial, Helvetica, sans-serif; font-size:2rem; margin-bottom:1rem; display:flex; align-content : center;">Daftar Produk <a href="product/add.php"><img style="margin : 0 1rem; width:1.2rem;" src="asset/images/icon/add.png" alt=""></a></div>
            <div style=" display:table-row-group; ">
                <button style="box-shadow: 0 0 2px 2px rgb(223, 223, 223); border:none; background-color:rgb(255, 255, 255); border-radius:2rem; padding: .3rem 1rem; font-size:1.2rem; margin-right:.5rem;">Elektronik</button>
                <button style="box-shadow: 0 0 2px 2px rgb(223, 223, 223); border:none; background-color:rgb(255, 255, 255); border-radius:2rem; padding: .3rem 1rem; font-size:1.2rem; margin-right:.5rem;">Kecantikan</button>
                <button style="box-shadow: 0 0 2px 2px rgb(223, 223, 223); border:none; background-color:rgb(255, 255, 255); border-radius:2rem; padding: .3rem 1rem; font-size:1.2rem; margin-right:.5rem;">Makanan</button>
            </div>
            <div style="padding:6vh 0; overflow-y: auto;">
                <?php
                $i =0;
                for($i = 0 ; $i< 10;$i++){?>
                <div style="display:table-cell;">
                <div style="margin-right : 1rem;  width:12rem; height: 30vh;  padding-bottom: 1rem; box-shadow: 0 0 2px 2px rgb(223, 223, 223); border-radius:10px; ">
                    <img src="asset/banner.png" style="width:12rem; height:15vh; border-radius: 10px 10px 0 0;" alt="">
                    <div style="display:grid;  padding: .5rem .5rem;">
                        <span>Nama produk</span>
                        <span>Harga </span>
                        <div style="width: 100%; display:flex; justify-content:end; padding-top:2rem; ">
                            <button class="btn" >Beli</button>
                        </div>
                    </div>
                </div>
                </div>
                <?php } ?>
                
            </div>
        </div>
        <?php require("ui/footer.php");?>
    </div>
</body>
</html>

<script>
    let btnShow = document.getElementById("showSide");
    let sideBar = document.getElementById("sideBar");
    console.log(btnShow);
    console.log(sideBar);

    btnShow.addEventListener('click',()=>{
        console.log("Hallo");
        sideBar.classList.toggle("hide");
        console.log(sideBar);
    });
</script>