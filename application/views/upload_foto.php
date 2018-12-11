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
            <?php
                        $this->load->library('form_validation');
                        $this->load->helper(array('form'));
                ?>
                <?php echo validation_errors(); ?>
                <?php echo form_open_multipart('create'); ?>
            <div class="imgcontainer">
                <h1 style="font-family: montserrat;font-size: 40px;text-align: center; padding: 30px; color:#d2b48c;">UPLOAD PHOTO</h1>
            </div>
            <div class="container">
            <label for="caption" style="color: #694b89; font-family: montserrat; font-size: 20px;text-align: center; padding: 50px">Choose Photo</b></label>
            <p>
                <input type="file" id="userfile" name="userfile" style="padding: 50px" accept="noimage.png, noimage.jpg">
                <!--<label for="fileupload"> Select a file to upload</label>-->
            </p>

            <p>
                <label for="caption" style="color: #694b89; font-family: montserrat; font-size: 20px;text-align: center; padding: 50px ">Caption Photo</label>
                <p>
                <textarea type="textarea" style="resize:none;background-color:#e3e3e3;border:1px solid #ccc;margin-left:55px;border-radius:15px;padding: 10px 10px 10px 10px; " rows="10" cols="56" name="caption" ></textarea></p>

            <tr>
                <td><label for="genre" style="color: #694b89; font-family: montserrat; font-size: 20px;text-align: center; padding: 50px ">Genre</label><td>
                <p></p>
                <td><label><input type="radio" name="genre" value="L">Fashion</label></td> 
                <td><label><input type="radio" name="genre" value="P">Photography</label></td>
                <td><label><input type="radio" name="genre" value="P">Nature</label></td>
                <td><label><input type="radio" name="genre" value="P">Digital</label></td>
                <td><label><input type="radio" name="genre" value="P">Art</label></td>
                
            </tr>
                <button type="submit" style="border-radius: 0px; margin-top:30px;margin-left: 150px;color: #252525; background-color: #ececec ">Done</button>
        </div>
        <?php echo form_close(); ?>

        </div>

    </div>

</body>
