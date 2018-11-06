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

        if($id_user == "" || $pw_user == ""){
            header("location:loginerror.php?e=1");
            exit();
        }

        $sql = mysql_query("SELECT * FROM user WHERE id_user='$id_user' and pw_user='$pw_user'", $koneksi);

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
<html lang="en">
<head>
    <title>VOTEART</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
        <div class="header">
            <link rel="stylesheet" href="..\CSS\style_login.css">
           
        </div>
        <div class="hero"></div>
        <div class="content">
            <div class=square1>
               <form class="modal-content animate" action="/action_page.php">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span><a href=""></a>
                        <h1 style="font-family: montserrat;font-size: 40px;text-align: center; color:  #30bdbe;">LOG IN MENU</h1>
                    </div>
                    <div class="container">
                        <label for="USERID" style="color: white; font-family: montserrat; font-size: 20px"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="id_user" required>

                        <label for="PASSWORD" style="color: white; font-family: montserrat; font-size: 20px"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pw_user" required>
                        
                        <button type="submit" name="SUBMIT" value="Sign In" style="border-radius: 10px;margin-left: 130px">Login</button>
                        <label style="color: white; font-family: montserrat; display: inline-block;">
                            <input type="checkbox" checked="checked" name="remember">Remember me
                        </label>
                    </div>
                    <div class="container">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="border-radius: 10px; margin-left: 130px;" href="Home_basic.html">Cancel</button>
                            <br>
                                <span class="psw" style="font-family: montserrat; text-decoration: none; color:white;margin-left: 330px;">Forgot <a href="#"  style="font-family: montserrat; text-decoration: none;color :white">password?</a></span>
                            </br>
                     <div class="container">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="border-radius: 0px; margin-top:80px;margin-left: 130px;color: #252525; background-color: grey">REGISTER</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</body>
</html>
