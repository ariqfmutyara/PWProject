<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vote Art</title>
	   <link rel="stylesheet" href="<?php echo base_url();?>assets/CSS/style-nav.css">
</head>
<body>
    <div class="navbar">
        <div class="brand">
            <a href="<?php echo base_url()?>home" style="
  background: -webkit-linear-gradient(#d2b48c, #694b89);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">VOTART</a>
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
                            <a href="edit_artist" class="dropbtn" style="width:206px;">Edit Profile</a>
                            <a href="logout_artist" class="dropbtn" style="width:206px;">My Gallery</a>
                            <a href="logout_artist" class="dropbtn" style="width:206px;">Log out</a>
                        </div>
                 </li>
                 <li>
                    <a class="dropbtn" href="create">Upload</a>
                </li>
                <?php endif; ?>
                <li style="margin-right: 40px;">
                     <?php if($this->session->flashdata('login_voter_success')) : ?>
                    <?php echo '<p class="alert alert-success" id="nav">'.$this->session->flashdata('login_voter_success').'</p>'; ?>
                     <?php endif; ?>
                    <?php if($this->session->flashdata('logout_voter_success')) : ?>
                        <?php echo '<p class="alert alert-success"  id="nav">'.$this->session->flashdata('logout_voter_success').'</p>'; ?>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('login_user_success')) : ?>
                        <?php echo '<p class="alert alert-success"  id="nav">'.$this->session->flashdata('login_user_success').'</p>'; ?>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('logout_user_success')) : ?>
                        <?php echo '<p class="alert alert-success"  id="nav">'.$this->session->flashdata('logout_user_success').'</p>'; ?>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('edit_profile_success')) : ?>
                        <?php echo '<p class="alert alert-success"  id="nav">'.$this->session->flashdata('edit_profile_success').'</p>'; ?>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('create')) : ?>
                        <?php echo '<p class="alert alert-success"  id="nav">'.$this->session->flashdata('create').'</p>'; ?>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('delete')) : ?>
                        <?php echo '<p class="alert alert-success"  id="nav">'.$this->session->flashdata('delete').'</p>'; ?>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('update')) : ?>
                        <?php echo '<p class="alert alert-success"  id="nav">'.$this->session->flashdata('update').'</p>'; ?>
                    <?php endif; ?>
                    <link rel="stylesheet" href="<?php echo base_url();?>assets/CSS/style-header.css">
                    <style>
                        #nav{
                            color: #694b89;
                            background-color: #694b89;
                            width: 40px;
                            height: 25px;
                            text-decoration: none;
                            font-family: montserrat;
                            font-size: 0px;
                            border-radius: 100px;
                            transition: 0.4s;
                            cursor: pointer;
                            margin-top: 5px;
                            padding-top: 15px;
                            opacity: 0.6;

                        }
                      #nav:hover{
                            color: white;
                            background-color: #694b89;
                            width: 150px;
                            height: 25px;
                            text-decoration: none;
                            font-family: montserrat;
                            text-align: center;
                            border-radius: 100px;
                            font-size: 10px;
                            opacity: 1;


                      }
                    </style>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>