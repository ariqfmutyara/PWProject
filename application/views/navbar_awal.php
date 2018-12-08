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
                <li>
                    <a class="dropbtn" href="<?php echo base_url()?>footer_aboutus">About Us</a>
                </li>
                <?php if(!$this->session->userdata('logged_in_voter') && !$this->session->userdata('logged_in_user') ) : ?>
                <li class="dropdown">
                    <a class="dropbtn" style="width:55px; ">Login</a>
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
                
                <?php endif; ?>
                <?php if($this->session->userdata('logged_in_voter')) : ?>
                <li class="dropdown">
                    <a class="dropbtn" style=""><?php echo $this->session->userdata('username_voter'); ?></a>
                        <div class="dropdown-content">
                            <a href="logout_voter" class="dropbtn" style="width:206px;">Log out</a>
                        </div>
                 </li>
                <?php endif; ?>
                <?php if($this->session->userdata('logged_in_user')) : ?>
                <li class="dropdown">
                    <a class="dropbtn" style=""><?php echo $this->session->userdata('username_user'); ?></a>
                        <div class="dropdown-content">
                            <a href="editartist" class="dropbtn" style="width:206px;">Edit Profile</a>
                            <a href="logout_artist" class="dropbtn" style="width:206px;">My Gallery</a>
                            <a href="logout_artist" class="dropbtn" style="width:206px;">Log out</a>
                        </div>
                 </li>
                 <li>
                    <a class="dropbtn" href="<?php echo base_url()?>uploadfoto">Upload</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</body>
</html>