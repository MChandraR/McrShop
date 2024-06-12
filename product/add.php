<?php require("data.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/styles.css">
    <link rel="stylesheet" href="../asset/css/add.css">
</head>
<body>
<div style="min-height: 100vh;">
    <?php require("../ui/sidebar.php");?>
    <?php require("../ui/navbar.php");?>
    <div>
        <h1 style="margin:.5rem;">Tambahkan Produk</h1>
        <form action="insert.php" method="post">
            <table style="margin : 1vw; width:40vw;">
                <tr>
                    <td style="width: max-content;">
                        <label >Nama produk </label>
                    </td>
                    <td>
                        <input class="input" type="text" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label >Kategori  </label>
                    </td>
                    <td>
                        <input class="input" type="text" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label >Stok </label>
                    </td>
                    <td>
                        <input class="input" type="number" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label >Deskripsi </label>
                    </td>
                    <td>
                        <input class="input" type="text" required><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div style="display:flex; justify-content:end;">
                        <button class="btn bg-primary">Insert</button>
                    </div>
                    </td>
                </tr>
            </table>
           
        </form>
    </div>
    <table class="tabel-barang">
        <thead>
            <tr >
                <td class="head tb-cell">ID_Produk</td>
                <td class="head tb-cell">Nama Produk</td>
                <td class="head tb-cell">Kategori</td>
                <td class="head tb-cell">Stok</td>
                <td class="head tb-cell">Deskripsi</td>
                <td class="head tb-cell"></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data_barang as $data){ 
                echo '<tr>
                <td class="tb-cell">'.$data["id"].'
                <td class="tb-cell">'.$data["nama"].'
                <td class="tb-cell">'.$data["kategori"].'
                <td class="tb-cell">'.$data["stok"].'
                <td class="tb-cell">'.$data["deskripsi"].'
                <td class="tb-cell">
                    <a><img class="icon" src="/perweb/asset/images/icon/edit.png"></a>
                    <a><img class="icon" src="/perweb/asset/images/icon/delete.png"></a>
                </td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
</div>
<?php require("../ui/footer.php");?>
</body>
<script src="../asset/js/script.js"></script>
</html>