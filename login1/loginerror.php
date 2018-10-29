<!DOCTYPE html>
<head>
    <title>Untitled Document</title>    
</head>

<body>
    <?php
    if(isset($_GET['e'])){
        $error = S_GET['e'];

        if($error == 1 ){
            echo "<p> Login Error! UserID dan Password harus diisi!</p>";
        }
        elseif ($error ==2){
            echo "<p>Login Error! Silahkan masukkan UserID dan Password dengan Benar!</p>";
        }
    }
    ?>



</body>
</html>