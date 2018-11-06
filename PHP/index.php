<?php
session_start();
if(!isset($_SESSION['LOGIN'])){
    header("location:login.php");
        exit();
}
    if(isset($_GET['aksi'])){
        $aksi = S_GET['aksi'];

        if($aksi == "1" ){
            if(isset($_SESSION['LOGIN'])){
                unset($_SESSION['LOGIN']);
                session_unset();
                session_destroy();
                $_SESSION = array();
                    }
            header("location: login.php");
            exit();
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>VOTEART</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="header">
		    <link rel="stylesheet" href="..\CSS\style_home_basic.css">
		    <ul>
		        <li><a href="#register">REGISTER</a></li>
		        <li><a href="login_user.php">LOG IN</a></li>
		        <li class="dropdown">
		            <a href="javascript:void(0)" class="dropbtn">CATEGORIES</a>
		            <div class="dropdown-content">
		                <a href="#outdoor">Outdoor</a>
		                <a href="#indoor">Indoor</a>
		                <a href="#animal">Animal</a>
		                <a href="#Urband">Urband</a>
		                <a href="#pop art">Pop Art</a>
		                <a href="#rvector">Vector</a>
		                <a href="#abstract">Abstract</a>
		        <li><a href="#news">EXPLORE</a></li>
		            <li>
		            <div class="search-container">
		                <form action="#searchbar">
		                    <input type="text" placeholder="Search more Art. . ." name="search">
		                        <button type="submit">Go!</button>
		                </form>
		            </div>  
		        </li>
		            </div>      
		        </li>
		    </ul>
		</div>
		<div class="hero"></div>
		<div class="content">
			<h2>PHOTO OF THE DAY</h2>
			<img src="542431-636251707678601607-16x9.jpg" alt="pottd">
			<div class=square1>
				<div class="square2">
					<div class="explore">Explore.</div>			
				</div>
			</div>
		</div>
	</div>
	<p><a href = "home.php?aksi=1">LOGOUT</a></p>
</body>
</html>
