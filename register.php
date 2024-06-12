<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/login.css">
</head>
<body>
    <div class="body">
    <div class="login-body">
        <table style="width:100%">
            <tr>
                <td class="section bdr-1">
                    <span class="tx-1">
                        Daftar,
                    </span><br>
                    <span class="tx-1" style="font-size : 1.5rem;">
                        Buat akun baru, temukan berbagai macam produk impianmu !
                    </span>
                </td>
                <td class="section">
                    <form action="index.php" method="POST" >
                        <label class="form-element label" style="font-size:1.5rem; font-weight:1000;" >Register</label> <br><br>
                        <label class="form-element label" > Username </label> <br>
                        <input class="form-element input"type="text" placeholder = "Masukkan username " > <br>
                        <label class="form-element label" > Email </label> <br>
                        <input class="form-element input" type="text" placeholder = "Masukkan email  " > <br>
                        <label class="form-element label" > Password </label> <br>
                        <input class="form-element input" type="text" placeholder = "Masukkan password  " > <br>
                        
                        <div class="form-element" style="width:100%; justify-items : end; justify-content : end;  display:flex;  ">
                            <span class="form-element" style="font-size : .7rem;">Suda punya akun ? <a  style="font-size : .7rem;" href="login.php">Login</a> </span> 
                        </div>
                        <div class="form-element" style="width:100%; justify-items : end; justify-content : end;  display:flex;">
                            <button class="btn" type="submit"> Daftar</button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
       
    </div>
    </div>
    
</body>
</html>