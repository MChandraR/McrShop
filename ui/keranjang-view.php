<?php

function listView($nama, $deskripsi){
    echo 
    '<div class="listView">
        <div><input style="width:2vw; height:2vw;" type="checkbox"/></div>
        <div><img src="asset/images/barang.png" style="width:5rem;"></div>
        <div class="product-info">
            <span style="font-size : 1.2rem;"><b>'.$nama.'</b></span><br>
            <span style="font-size : 1rem;">Nama Toko</span><br><hr>
            <span style="font-size : 1rem;">'.$deskripsi.'</span><br>
        </div>
        <div>
            <div style="width:100%; display:flex; justify-content : end;"class="qty">
                <img style="margin: 0 .2rem;width:1.5rem; height:1.5rem;" src="asset/images/icon/minus.png" alt="" id="minQty">
                <input style="width:2rem; text-align :center;" readonly type="text" id="qty">
                <img style="margin: 0 .2rem;width:1.5rem; height:1.5rem;" src="asset/images/icon/add.png" alt="" id="plusQty">
            </div>
        </div>
    </div>';
}

?>