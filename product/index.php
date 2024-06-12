<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/styles.css">
    <link rel="stylesheet" href="../asset/css/product.css">
</head>
<body>
<?php require("../ui/sidebar.php");?> 
<?php require("../ui/navbar.php");?> 
<div style="min-height : 100vh; padding : 5vh .5rem;">
    <div style="width : 100%;">
        <div style="float:left; width:70%; margin-bottom:2rem;">
            <img style="padding : 0 2%; width:30%; float:left; margin-right : 1rem;" src="../asset/images/barang.png" alt="">
            <div style="padding : 0 2rem 0 1%;">
                <span style="font-size : 2rem;"><b>Nama Produk</b></span><br>
                <span style="font-size : 1rem;"><b>Kategori</b></span><br>
                <span style="font-size : 1rem;"><b>0 Terjual / ⭐5 </b></span><br><br>
                <span style="font-size : 1.5rem;"><b>Rp.150.000</b></span><br>
                <hr>
                <span style="text-wrap: pretty;text-align: justify;font-size : 1rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices euismod fringilla. Fusce sit amet enim urna. Nulla erat massa, fermentum at sodales ac, gravida id neque. Nullam egestas, metus in tristique sodales, nulla neque sodales arcu, sit amet pellentesque sem dolor a nisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec molestie eu metus non cursus. Morbi venenatis congue neque, vitae rhoncus purus dictum in. Phasellus volutpat auctor nunc, vel vehicula ante malesuada sit amet. Suspendisse potenti. Pellentesque laoreet ipsum quis blandit feugiat.</span><br>
            </div>
        </div>
        <div style="float:left; width:24%;" class="co-card">
            <span><b>Checkout</b></span>
            <hr>
            <span><b>Stock  :</b></span><br>
            <div class="qty">
                <span><b>Jumlah </b></span>
                <div style="width:100%; display:flex; justify-content : end;"class="qty">
                    <img style="margin: 0 .2rem;width:1.5rem; height:1.5rem;" src="../asset/images/icon/minus.png" alt="" id="minQty">
                    <input style="width:2rem; text-align :center;" readonly type="text" id="qty">
                    <img style="margin: 0 .2rem;width:1.5rem; height:1.5rem;" src="../asset/images/icon/add.png" alt="" id="plusQty">
                </div>
            </div><br>
            <hr>
            <table>
                <tr>
                    <td>
                        <b><span>Harga </span><br></b>
                    </td>
                    <td>
                        <b><span> : Rp.150.000,00 </span><br></b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b><span>Subtotal  </span><br></b>
                    </td>
                    <td>
                        <b>: Rp.<span id="harga"></span>,00<br></b>
                    </td>
                </tr>
            </table>
            
            
            <div class="btn-area">
                <button class="btn">Beli</button>
            </div>
        </div>
    </div>
</div>
<?php require("../ui/footer.php");?> 
</body>
<script src="../asset/js/script.js"></script>
</html>
<script>
    let value = 0 ;
    let qry = document.getElementById("qty");
    qry.value = value;
    let btnPlus = document.getElementById("plusQty");
    let btnMin = document.getElementById("minQty");
    let harga = document.getElementById("harga");

    btnPlus.addEventListener('click',()=>{
        value += 1;
        qry.value = value;
        harga.innerHTML = (value * 150000);
    });

    btnMin.addEventListener('click',()=>{
        value -= value >0 ? 1 : 0;
        qry.value = value;
        harga.innerHTML = (value * 150000);
    });
</script>