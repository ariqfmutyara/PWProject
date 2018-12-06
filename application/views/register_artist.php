<!DOCTYPE html>
<html lang="en">
<head>
    <title>REGISTER VOTEART</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
        <div class="header">
            <link rel="stylesheet" href="<?php echo base_url();?>assets/CSS/style_register.css">
           
        </div>
        <div class="hero"></div>
        <div class="content">
            <div class=square1>
                <?php
                        $this->load->library('form_validation');
                        $this->load->helper(array('form'));
                ?>
                <?php echo validation_errors(); ?>
                <?php echo form_open('register_artist'); ?>
               <form class="modal-content animate" action="login_artist" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span><a href=""></a>
                        <h1 style="font-family: montserrat;font-size: 40px;text-align: center; color:  white;">CREATE AN ACCOUNT</h1>
                    </div>

                    <div class="container">
                        <label for="name_user" style="color: white; font-family: montserrat; font-size: 20px"><b>Full name</b></label>
                        <input type="text" placeholder="Enter fullname" name="name_user" required>

                        <label for="username_user" style="color: white; font-family: montserrat; font-size: 20px"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username_user" required>

                        <label for="email_user" style="color: white; font-family: montserrat; font-size: 20px"><b>Email</label>
                        <input type="text" placeholder="Enter email" name="email_user" required>

                        <label for="pw_user" style="color: white; font-family: montserrat; font-size: 20px"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pw_user" required>

                        <label for="pw_user1" style="color: white; font-family: montserrat; font-size: 20px"><b>Confirm Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pw_user1" required>
                    
                    <form method ="get" action="<?php echo base_url("/Home_artist")?>">
                        <button type="submit" style="border-radius: 10px;margin-left: 150px;color:black;"><a href="login_artist">Create Account</a></button>
                    </form>
                    
                    <form method ="get" action="<?php echo base_url("/Home")?>">
                        <button type="submit" class="cancelbtn" style="border-radius: 10px; margin-left: 157px;">Cancel</button>
                    </form>
                    </div>
                    <div class="container">
                  </form>
                  <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</body>
</html>