    
<!-- Header awal section isinya slider foto tentang VOTART
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
              <h1>Find Your Inspiration</h1>
              <h3>Appreciate the Creation</h3>
          </div>

	</div>
	</section>		