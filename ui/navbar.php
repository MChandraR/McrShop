<div class="navbar">
    <div style="display:flex;">
        <img src="/perweb/asset/images/logo.png" alt="" style="width:3rem; height:3rem;">
        <h1 class="txt-putih " style="font-size:3rem; ">ToCo</h1>
    </div>
    
    <div class="navbar-kiri" style="float:left;">
        <input id="searchInput" class="txt-putih navbar-item" style="border-radius:1rem; height:1rem; padding:2px;" type="text" class="text">
        <img src="/perweb/asset/images/search.png" style="width:1rem; height:1rem; padding:2px;" alt="">
        <h1 class="txt-putih navbar-item" style="font-size:1.2rem;"><a style=" text-decoration:none;" href="/perweb/toko.php">Toko</a></h1>
        <h1 class="txt-putih navbar-item" style="font-size:1.2rem;"><a style=" text-decoration:none;" href="/perweb/index.php">Home</a></h1>
        <h1 class="txt-putih navbar-item" style="font-size:1.2rem;"><a style=" text-decoration:none;" href="/perweb/login.php">Login</a></h1>
    </div>
</div>

<script>
    document.getElementById("searchInput").addEventListener("keypress",(e)=>{
        if(e.key == "Enter"){
            window.location.href = "/perweb/product/search.php?key=" + document.getElementById("searchInput").value;
        }
    });
</script>