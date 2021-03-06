    
<!-- Header awal section isinya slider foto tentang VOTART
================================================== -->
<style>
	 h1,h2,h3,h4 {
  font-weight: 400;
  letter-spacing: 0.3rem;
  text-transform: uppercase;
  text-align: center;
  font-family: 'montserrat';

}

h1 {
  color: #d2b48c;
  font-size: 1.8rem;
  font-weight: 700;
}


h3 {
  color: #694b89 ;
  font-size: 14px;
  letter-spacing: 4px;
}

.header-awal{
  padding: 10px 10px 10px 10px !important;
}


.header-awal{
  background-color: #f1f2e9;
  background-image: linear-gradient(to top right, #d2b48c, #694b89);
  height: 40vh !important;
  min-height: 465px;
  padding-top: 150px !important;
}

.header-thumb {
  padding: 32px 20px 32px 20px !important;
  background: white;
  border: 0px solid #ececec;
  border-radius: 10px 10px 0px 0px;
  margin-top: -80px;
  margin-left: 380px;
  min-height: 430px;
  width: 38%;
}

.header-one{
  padding: 10px 10px 10px 10px !important;
}


.header-one {
  background-color: #f1f2e9;
  background-image: linear-gradient(to top, #f9f9f9, #e3e3e3);
  height: 40vh !important;
  min-height: 465px;
  padding-top: 150px !important;
}


@keyframes slider{
    0%{
        left: -1%;
    }
    25%{
        left: -99%;
    }
    50%{
        left: -199%;
    }
    75%{
        left: -299%;
    }
    100%{
        left: -400.5%;
    }
}

.slider {
    overflow: hidden;
    width: 100%;
    height: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-bottom: -10px;
}



.slider figure img{
    margin-left:20px;
    max-width: 480px;
    min-height: 335px;
}

.slider figure{
    position: relative;
    width: 700%;
    height: 100%
    margin-right: 10px;
    font-size: 0;
    animation: 10s slider infinite;
    animation-delay: 2s;
    margin-left: -18px;

}

figure{
  opacity: 0.9;
  transition: 0.2s;
}
figure:hover{
  opacity: 1;
  
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
              <h1>Find Your Inspiration</h1>
              <h3>Appreciate the Creation</h3>
          </div>

	</div>
	</section>		