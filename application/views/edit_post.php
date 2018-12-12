<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vote Art</title>
    <link rel="stylesheet" href="assets/CSS/style_login.css">
</head>
<body>
    <div class = "container">
        <div class="square1">
            <!--<form class="modal-content animate" action="controllers/Home.php">-->
            <?php
                    $this->load->helper(array('form'));
                ?>
                <?php echo form_open('update'); ?>
            <div class="imgcontainer">
                <h1 style="font-family: montserrat;font-size: 40px;text-align: center; padding: 30px; color:#d2b48c;">EDIT PHOTO</h1>
            </div>
            <div class="container">
           
            <p>
                <label for="caption" style="color: #694b89; font-family: montserrat; font-size: 20px;text-align: center; padding: 50px ">Caption Photo</label>
                <p>
                <textarea type="textarea" style="resize:none;background-color:#e3e3e3;border:1px solid #ccc;margin-left:55px;border-radius:15px;padding: 10px 10px 10px 10px; " rows="10" cols="56" name="caption" ></textarea></p>

                <button type="submit" style="border-radius: 0px; margin-top:30px;margin-left: 150px;color: #252525; background-color: #ececec ">Done</button>
                <?php echo form_close(); ?>
                <?php echo form_open('delete'); ?>
                <button type="submit" style="border-radius: 0px; margin-top:30px;margin-left: 150px;color: #252525; background-color: #ececec ">Delete Photo</button>
        </div>
        <?php echo form_close(); ?>

        </div>

    </div>

</body>
