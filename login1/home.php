<?php
session_start();
if(!isset($_SESSION['LOGIN'])){
    header("location:index.php");
        exit();
}
    if(isset($_GET['aksi'])){
        $aksi = S_GET['aksi'];

        if($aksi == "logout" ){
            if(isset($_SESSION['LOGIN'])){
            unset($_SESSION['LOGIN']);
            session_unset();
            session_destroy();
            $_SESSION = array();
                }
            header("location: index.php");
            exit();
        }
    }
    ?>

<!DOCTYPE html>
<head>
    <title>HALAMAN UTAMA</title>    
</head>

<body>
<p>Selamat Datang</p>
<p><a href = "home.php?aksi=logout">LOGOUT</a></p>
</body>
</html>