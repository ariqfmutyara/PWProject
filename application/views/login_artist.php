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
    <?php if($this->session->flashdata('register_artist')) : ?>
        <?php echo '<p style="background-color: blue;" class="alert alert-success">'.$this->session->flashdata('register_artist ').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('login_user_failed')) : ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('login_user_failed').'</p>'; ?>
    <?php endif; ?>
    <div class="preloader">
        <div class="sk-spinner sk-spinner-pulse"></div>
    </div>

    <div class="container">
        <div class="header">
        </div>
        <div class="hero"></div>
        <div class="content">
            <div class=square1>
                <?php
                        $this->load->library('form_validation');
                        $this->load->helper(array('form'));
                ?>
                <?php echo validation_errors(); ?>
                <?php echo form_open('login_artist'); ?>
               <form class="modal-content animate" action="home">
                    <div class="imgcontainer">
                        <h1 style="font-family: montserrat;font-size: 40px;text-align: center; padding: 30px; color: #d2b48c;">LOG IN AS ARTIST</h1>
                    </div>
                    <div class="container" >
                        <label for="username_user" style="color: black; font-family: montserrat; font-size: 20px;text-align: center;"><b style="text-align: center;">Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username_user" required>

                        <label for="pw_user" style="color: black; font-family: montserrat; font-size: 20px"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pw_user" required>
                        
                        <form method ="get" action="home">
                            <button type="submit" value="Sign In" style="border-radius: 10px;margin-left: 150px">Login</button>
                        </form>
                        <label style="color: black; font-family: montserrat; margin-left: 20px; display: inline-block;">
                            <input type="checkbox" checked="checked" name="remember">Remember me!
                        </label>
                    </div>
                    <div class="container">
                    <form method ="get" action="home">
                        <button type="submit" class="cancelbtn" style="border-radius: 10px; margin-left: 150px;">Cancel</button>
                        
                    </form>
                    <br>
                                <span class="psw" style="font-family: montserrat; text-decoration: none; color:;margin-left: 250px;">Forgot<a href="#"  style="font-family: montserrat; text-decoration: none;color :black"> Password?</a></span>
                            </br>
                     <div class="container">
                     <form method ="get" action="register_artist">
                        <button type="submit" style="border-radius: 0px; margin-top:80px;margin-left: 150px;color: #252525; background-color: #ececec ">REGISTER</button>
                    </div>
                  </form>
                  <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</body>
</html>
