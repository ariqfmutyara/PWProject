<?php
    session_start();
    if(isset($_SESSION['LOGIN'])){
        header("location:home.php");
            exit();
    }

    require_once ("config.php");

    if(isset ($_POST['SUBMIT'])){
        $id_user = trim($_POST['id_user']);
        $pw_user = trim($_POST['pw_user']);

        echo "<pre>";
        var_dump($this->input->post());
        echo "</pre>";
        die();

        if($id_user == "" || $pw_user == ""){
            header("location:loginerror.php?e=1");
            exit();
        }

        $sql = mysql_query("SELECT * FROM user WHERE id_user='$userid' and pw_user='$pwid'", $koneksi);

        if(mysql_num_rows($sql) != 0){
            $_SESSION['LOGIN'] = 1;
            session_start();

            header("location:home.php");
            exit();
        }
        else{
            header ("location:loginerror.php?e=2");
            exit();
        }
    }


?>

<!DOCTYPE html>
<head>
    <title>Desain Form Login Dengan Css</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Sign In</h2>
        </div>
        <div class="artikel">
            <form action="home.php" method="post">
                <div class="grup">
                    <label for="USERID">User ID:</label>
                    <input name="userid" type="text" placeholder="USERID">
                </div>
                <div class="grup">
                    <label for="PASSWORD">Password</label>
                    <input name="pwid" type="password" placeholder="password">
                </div>
                <div class="grup">
                    <input type="submit" value="Sign In">
                </div>
            </form>
        </div>
    </div>
</body>
</html>