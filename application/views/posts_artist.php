<!DOCTYPE html>
<html>
<head>
	<title>VOTEART</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/CSS/posts-artist.css">
</head>
<body>
	<div>
		<button class="button" >
			<a href="halaman utama" style="color: white;margin:auto;text-align: center;width:45px;">Back</a>
		</button>
	</div>
	<div class="post-photo">
		<div class="konten-grid1">
			<div class="konten-photo" style="">
				<div class="image">
					<img src="D:\ooo\photo5.png">
				</div>
			</div>
			<div class="konten-photo" style="width: 260px;height: 500px;margin-top: 10px;">
				<div class="konten-isi">
					<div class="user-acc">
						<h1>Nama User</h1>
						<a href="#">@Username</a>
						<img style="margin-top:10px;margin-left: 50px;border-radius: 50px 50px 50px 50px;" src="<?php echo base_url();?>assets/foto/posts/<?php echo $posts['image']; ?>">
					</div>
					<div class="caption">
						<div class="capt1">
							ini caption
						</div>
							<div class="konten-grid2">
								<div class="like-button" >ini like button</div>
								<div class="like-button" >ini edit button</div>
								<div class="like-button" >ini hapus button</div>
									
								</div>
						</div>
					</div>
				</div>
			</div>
	</div>


</body>
</html>