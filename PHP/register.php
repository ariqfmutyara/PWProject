<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter
    $name_user = filter_input(INPUT_POST, 'name_user', FILTER_SANITIZE_STRING);
    $username_user = filter_input(INPUT_POST, 'username_user', FILTER_SANITIZE_STRING);
    // encrypt
    $pw_user = password_hash($_POST["pw_user"], PASSWORD_DEFAULT);
    $email_user = filter_input(INPUT_POST, 'email_user', FILTER_VALIDATE_EMAIL);


    // prepare query
    $sql = "INSERT INTO users (name_user, username_user, email_user, pw_user) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter to query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // execute
    $saved = $stmt->execute($params);
    
    if($saved) header("Location: login.php");
}
?>

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
            <link rel="stylesheet" href="..\CSS\style_register.css">
           
        </div>
        <div class="hero"></div>
        <div class="content">
            <div class=square1>
               <form class="modal-content animate" action="login.php">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span><a href=""></a>
                        <h1 style="font-family: montserrat;font-size: 40px;text-align: center; color:  #30bdbe;">CREATE AN ACCOUNT</h1>
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

                        <label for="pw_user" style="color: white; font-family: montserrat; font-size: 20px"><b>Confirm Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pw_user" required>

                        <input type="radio" name="jenis_operator" value="Laki-laki" checked/> 
                        <input type="radio" name="jenis_operator" value="Perempuan"> 
                        <br />

                        
                        <button type="submit" name="register" value="create" style="border-radius: 10px;margin-left: 200px; text-decoration: none;color:white;">Create Account</button>
                        <label style="color: white; font-family: montserrat; display: inline-block;">
                        <input type="checkbox" checked="checked" name="remember" style="border-radius: 10px;margin-left: 140px" >Remember me</label>
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="border-radius: 10px; margin-left: 200px;"><a href="Home_basic.html" style="color:white;text-decoration: none;">Cancel</a></button>
                    </div>
                    <div class="container">
                            
                    
                  </form>
            </div>
        </div>
    </div>
</body>
</html>