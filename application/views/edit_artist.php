<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vote Art</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/CSS/style_login.css">
</head>
<body>
    <div class = "container">
        
        
        <div class="square1">
            <!--<form class="modal-content animate" action="controllers/Home.php">-->
            <div class="imgcontainer">
                <h1 style="font-family: montserrat;font-size: 40px;text-align: center; padding: 30px; color:#d2b48c;">EDIT PROFILE ARTIST</h1>
            </div>
            <?php
                $this->load->library('form_validation');
                $this->load->helper(array('form'));
            ?>
            <?php echo form_open_multipart('edit_artist'); ?>
            <div class="container">
            <label for="pp" style="color: #694b89; font-family: montserrat; font-size: 20px;text-align: center; padding: 50px">Choose Photo</b></label>
                <input type="file" id="pp" name="userfile" style="padding: 50px" accept="image.png, image.jpeg">
                <!--<label for="fileupload"> Select a file to upload</label>-->
                <label for="Nama" style="color: #694b89; font-family: montserrat; font-size: 20px;text-align: center; padding: 50px ">Name</b> </label>
                <input type="text" placeholder="Nama" name="Nama" required />
                <label for="bio" style="color: #694b89; font-family: montserrat; font-size: 20px;text-align: center; padding: 50px ">About You</label>
                <textarea type="textarea" style="resize:none;background-color:#e3e3e3;border:1px solid #ccc;margin-left:55px;border-radius:15px;padding: 10px 10px 10px 10px; " rows="15" cols="56" name="bio" ></textarea>
            <!--<form method ="get" action="home">-->
                <button type="submit" style="border-radius: 0px; margin-top:20px;margin-left: 150px;color: #252525; background-color: #ececec ">Done</button>
        </div>
        <?php echo form_close(); ?>
        </div>
        
    </div>

</body>
