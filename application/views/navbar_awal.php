<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vote Art</title>
	   <link rel="stylesheet" href="<?php echo base_url();?>assets/CSS/style-nav.css">
</head>
<body>
    <div class="navbar">
        <div class="brand">
            <a href="index.html">VOTART</a>
        </div>
        <div class="navicon">
            <ul>
                <li class="dropdown">
                    <a class="dropbtn" style="margin-right:20px;width:55px; ">Login</a>
                        <div class="dropdown-content">
                            <a href="<?php echo base_url()?>login_voter" class="dropbtn" >As Voter</a>
                            <a href="<?php echo base_url()?>login_artist" class="dropbtn">As Artist</a>
                </li>
                <li class="dropdown">
                    <a class="dropbtn">Register</a>
                    <div class="dropdown-content">
                        <a href="<?php echo base_url()?>register_voter" class="dropbtn" >As Voter</a>
                        <a href="<?php echo base_url()?>register_artist" class="dropbtn">As Artist</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>