<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
    <meta name="description" content="">
    <title>Vote Art</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/CSS/style_login.css">
</head>

<body>
    <?php 
        if($this->session->flashdata('register_artist'))
            echo '<p class="alert alert-success">'.$this->session->flashdata('register_artist ').'</p>'; ?>
    <div class="preloader">
        <div class="sk-spinner sk-spinner-pulse"></div>
    </div>

    <div class="container">
        <div class="header">
        </div>
        <div class="hero"></div>
        <div class="content">
            <div class=square1>
               <form class="modal-content animate" action="controllers/Home.php">
                    <div class="imgcontainer">
                        <h1 style="font-family: montserrat;font-size: 40px;text-align: center; padding: 30px; color: white;">LOG IN</h1>
                    </div>
                    <div class="container" >
                        <label for="USERID" style="color: white; font-family: montserrat; font-size: 20px;text-align: center;"><b style="text-align: center;">Username</b></label>
                        <input type="text" placeholder="Enter Username" name="id_user" required>

                        <label for="PASSWORD" style="color: white; font-family: montserrat; font-size: 20px"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pw_user" required>
                        
                        <button type="submit" name="SUBMIT" value="Sign In" style="border-radius: 10px;margin-left: 150px">Login</button>
                        <label style="color: black; font-family: montserrat; margin-left: 20px; display: inline-block;">
                            <input type="checkbox" checked="checked" name="remember">Remember me
                        </label>
                    </div>
                    <div class="container">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="border-radius: 10px; margin-left: 150px;" href="Header.php">Cancel</button>
                            <br>
                                <span class="psw" style="font-family: montserrat; text-decoration: none; color:;margin-left: 250px;">Forgot <a href="#"  style="font-family: montserrat; text-decoration: none;color :black">password?</a></span>
                            </br>
                     <div class="container">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="border-radius: 0px; margin-top:80px;margin-left: 150px;color: #252525; background-color: #ececec ">REGISTER</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</body>
</html>
