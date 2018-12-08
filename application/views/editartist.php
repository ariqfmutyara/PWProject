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
            <div class="container">
            <label for="avatar" style="color: #694b89; font-family: montserrat; font-size: 20px;text-align: center; padding: 50px">Choose Photo</b></label>
            <p>
                <input type="file" id="avatar" name="fileupload" style="padding: 50px" accept="image/png, image/jpeg">
                <!--<label for="fileupload"> Select a file to upload</label>-->
            </p>
            <p>
                <label for="Nama" style="color: #694b89; font-family: montserrat; font-size: 20px;text-align: center; padding: 50px ">Name</b> </label>
                <input type="text" placeholder="Nama" name="Nama" required />
                <!--  value="<?php echo $mahasiswa['Nama'] ?> masukin setelah place holder -->
            </p>
            <p>
                <label for="Bio" style="color: #694b89; font-family: montserrat; font-size: 20px;text-align: center; padding: 50px ">About You</label>
                <p>
                <input type="text" style="height:200px; weight: 200px;" name="tuliskan sesuatu" /></p>
            <!--<form method ="get" action="<?php echo base_url("/register_voter")?>">-->
                <button type="submit" style="border-radius: 0px; margin-top:20px;margin-left: 150px;color: #252525; background-color: #ececec ">Done</button>

        </div>
        </div>

    </div>

</body>
