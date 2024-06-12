<?php

function listView($nama, $deskripsi){
    echo 
    '<a href="product/" style="text-decoration:none; color:black;">
    <div class="listView">
        <div style="display:flex;  justify-content:center;align-items:center; " ><img src="asset/images/barang.png" style=" object-fit: cover;width:7rem;"></div><br>
        <div class="product-info">
            <span style="font-size : 1.2rem;"><b>'.$nama.'</b></span><br>
            <span style="font-size : 1rem;">Nama Toko</span><br><hr>
            <span style="font-size : 1rem;">'.$deskripsi.'</span><br>
        </div>

        <img src="asset/images/icon/heart-fill.png" class="fav-icon">

    </div>
    </a>';
}

?>