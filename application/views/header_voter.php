
<!-- Header - VOTERS section isinya slider foto photo of the day kalo di klik nanti kehubung sm page tampiln foto
================================================== -->
 <?php if($this->session->flashdata('login_voter_success')) : ?>
 	<?php echo '<p class="alert alert-success">'.$this->session->flashdata('login_voter_success').'</p>'; ?>
 <?php endif; ?>
<?php if($this->session->flashdata('logout_voter_success')) : ?>
	<?php echo '<p class="alert alert-success">'.$this->session->flashdata('logout_voter_success').'</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('login_user_success')) : ?>
	<?php echo '<p class="alert alert-success">'.$this->session->flashdata('login_user_success').'</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('logout_user_success')) : ?>
	<?php echo '<p class="alert alert-success">'.$this->session->flashdata('logout_user_success').'</p>'; ?>
<?php endif; ?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/CSS/style-header.css">
<style>
	p{
		color: white;
    	background-color: #694b89;
    	width: 200px;
    	height: 30px;
    	text-decoration: none;
    	font-family: montserrat;
    	font-size: 12px;
    	text-align: center;
    	padding-top: 15px;
    	border-radius: 100px;


	}
</style>
<section class="header-awal">
	<div class="container">
          <div class="header-thumb">
            <div class="slider">
              <figure>
				  <a href="#"><img src="<?php echo base_url();?>assets/foto/blog-img9.jpg"></a>
				  <a href="#"><img src="<?php echo base_url();?>assets/foto/blog-img8.jpg"></a>
				  <a href="#"><img src="<?php echo base_url();?>assets/foto/blog-img7.jpg"></a>
				  <a href="#"><img src="<?php echo base_url();?>assets/foto/blog-img6.jpg"></a>
				  <a href="#"><img src="<?php echo base_url();?>assets/foto/blog-img9.jpg"></a>
              </figure>
            </div>
              <h1>PHOTO OF THE DAY</h1>
          </div>

	</div>
	</section>		