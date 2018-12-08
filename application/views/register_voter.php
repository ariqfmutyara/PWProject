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
                <?php echo form_open('register_voter'); ?>
               <form class="modal-content animate" action="login_voter" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span><a href=""></a>
                        <h1 style="font-family: montserrat;font-size: 40px;text-align: center; color:  #d2b48c; padding: 10px">CREATE VOTER ACCOUNT</h1>
                    </div>
                    
                    <div class="container">
                        <label for="name_voter" style="color: #694b89; font-family: montserrat; font-size: 20px"><b>Fullname </b></label>
                        <input type="text" placeholder="Enter fullname" name="name_voter" required>

                        <label for="username_voter" style="color: #694b89; font-family: montserrat; font-size: 20px"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username_voter" required>

                        <label for="email_voter" style="color: #694b89; font-family: montserrat; font-size: 20px"><b>e-Mail</label>
                        <input type="text" placeholder="Enter email" name="email_voter" required>

                        <label for="pw_voter" style="color: #694b89; font-family: montserrat; font-size: 20px"><b>Password </b></label>
                        <input type="password" placeholder="Enter Password" name="pw_voter" required>

                        <label for="pw_voter1" style="color: #694b89; font-family: montserrat; font-size: 20px"><b>Password  </b></label>
                        <input type="password" placeholder="Confirm Password" name="pw_voter1" required>
                        <br />

                    <form method ="get" action="login_voter">
                        <button type="submit" style="border-radius: 10px;margin-left: 150px;color:black;><a href="login_voter">Register </a></button>
                    </form>
                    <form method ="get" action="home">
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
