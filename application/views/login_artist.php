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
    <style>
    body{
    margin:0px;
    padding: 0px;
    font-size: 12px;
    background-image: linear-gradient(to top right, #d2b48c, #694b89);
    font-family: montserrat; 
}


div form{
    margin-top: 15px;
    margin-right: 30px;
}

h1{
    font-family: montserrat;
    font-size: 35px;
    text-align: center; 
    padding-top: 10px; 
    color: #694b89;
    transition: 0.3s;
    cursor: pointer;
    margin-left: 14px;
}
h1:hover{
    font-size: 40.5px;

}

button { /*zepeto*/
    font-family: montserrat;
    background-color: #d8cbcb;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    width: 20%;
    border-radius: 10px;

}

input{
    font-family: montserrat;
    width: 250px;
}

div.content h2{
    top: 0px;
    font-family: montserrat;
    font-size: 40px;
    margin-left:20px;
    text-align: center; 
}


div.content img{
    display: block;
    margin-left: auto;
    margin-right: auto; 
    border-radius: 100%;
    margin-top:60px;
    width:300px;
    height:300px;
}

ul li.content{
    list-style: none;
    width: 200px;
    height: 200px;
    margin: 10px;
    position: absolute; 
}


.square1{
    height: 550px;
    width: 550px;
    background-color: white;
    float: right;
    background-position: center center;
    margin-top: 40px;
    margin-right: 80px;
    margin-bottom: 100px;

    border-radius: 25px 25px 25px 25px;

}


input[type=text], input[type=password] {
    width: 80%;
    padding: 10px 10px;
    margin-left: 10%;
    margin-top: 12px;
    margin-bottom: 25px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    background-color: #e3e3e3;
    opacity : 8;
    border-radius: 9px;
}


.label1{ /*nama username password*/
    color: #694b89;  
    font-size: 20px;
    text-align: center;
    margin-left: 10px;
    display: inline-block;
    padding-top: 0px;
    padding-bottom: 0px;
}

.register1{
    margin-top:0px;
    margin-left: 150px;

}

.cekbox{
    display: block;
    position: relative;
    cursor: pointer;
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 12px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    text-align: center;
    color: #694b89;
    margin-left: 180px;
    margin-top: 12px;

}

.cekbox input{
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

.checkmark {
    position: absolute;
    height: 25px;
    width: 25px;
    background-color: #eee;
    margin-left: 40px;
    margin-top: -5px;

}
.cekbox input:checked ~ .checkmark {
    background-color: #694b89;
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}
.cekbox input:checked ~ .checkmark:after {
    display: block;
}
.cekbox .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.login1{
    color: #694b89;
    opacity: 0.8;
    transition: 0.3s;
    margin-left: 60px;
    background-color: #d8cbcb;
    margin-top: 0px;
}
.login1:hover{
    color:white;
    background-color: #694b89;
    width: 79%;
}
.login1:active{
    color:white;
    background-color: #d2b48c;
    opacity: 1;
    width: 79%;
}


.cancelbtn{
    color: #694b89;
    opacity: 0.8;
    transition: 0.3s;
    margin-left: 60px;
    background-color: #d8cbcb;
    margin-top: 0px;

}

.cancelbtn:hover{
    color:white;
    background-color: #694b89;
    width: 79%;
}
.cancelbtn:active{
    color:white;
    background-color:#d2b48c;
    opacity: 1;
    width: 79%;
}
.register1{
    color: white;
    opacity: 0.8;
    transition: 0.3s;
    background-color: #d2b48c;
    opacity: 0.6;
    margin-left: 60px;
    margin-top: 22px;
}
.register1:hover{
    color:white;
    padding: 20px;
    background-color:#694b89;
    width: 79%;
    opacity: 1;
}
.register1:active{
    color:white;
    padding: 20px;
    background-color: blue;
    width: 79%;
    opacity: 1;
}

    </style>
</head>

<body>
    <?php if($this->session->flashdata('register_artist')) : ?>
        <?php echo '<p style="background-color: blue;" class="alert alert-success">'.$this->session->flashdata('register_artist ').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('login_user_failed')) : ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('login_user_failed').'</p>'; ?>
    <?php endif; ?>

    <div class=square1>
        <?php
            $this->load->library('form_validation');
                $this->load->helper(array('form'));
        ?>
        <?php echo validation_errors(); ?>
        <?php echo form_open('login_artist'); ?>
        <h1>LOG IN AS ARTIST</h1>
        <form action="home" method="post">
                    <div>
                        <label for="username_user" class="label1"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username_user" required>

                        <label for="pw_user" class="label1"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pw_user" required>
                    <form method ="get" action="home">
                        <button type="submit" value="Sign In" href="home" class="login1">Login</button>
                    </form>
                        <label class="cekbox">Remember Me!
                            <input type="checkbox" checked="checked" name="remember">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div>
                    <form method ="get" action="home">
                        <button type="submit" class="cancelbtn">Cancel</button>
                    </form>
                     <div>
                     <form method ="get" action="register_voter">
                        <button type="submit" class="register1">REGISTER</button>
                    </form>
                    </div>
                  </form>
                  <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <!--
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
-->