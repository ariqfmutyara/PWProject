
  <!-- isinya container kalo udah login, baik itu voters atau artist (EXPLORE)
  ================================================== -->
  <style>
    .explore1{
      font-family: montserrat;
      font-size: 12px;
      margin-left: 80px;
    }

    .konten{
      background-color: #694b89;
      opacity: 0.8;
      transition: 0.3s;
      float: left;
      cursor: pointer;

    }
    .konten:hover{
      background-color: #694b89;
      opacity: 1;

    }
    .konten a{
      color: white;
      opacity: 0.8;

    }
    ul{
      list-style-type: none;
    }

    a{
      text-decoration: none;
    }

    table{
      border: none;
    }
    .lelah{
      width: 205px;
      height: 205px;
      cursor: pointer;
      opacity: 0.8;
      transition: 0.2s;
      margin: 4px 4px 4px 4px; 

    }
    img:hover{
      opacity: 1;

    }
  </style>
  <div class="explore1">
    <br>

      <ul class="genre">
         <li class="konten"><a href="a">Explore</a></li>
         <li class="konten"><a href="a">Photography</a></li>
         <li class="konten"><a href="a">Nature</a></li>
         <li class="konten"><a href="a">Fashion</a></li>
         <li class="konten"><a href="a">Architecture</a></li>
         <li class="konten"><a href="a">Art</a></li>
      </ul>
      <br>
      <div style=" margin-left: 40px;">
        <table>
          <br><br><br>
        <thead>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
        </thead>
        <tbody>  <!-- jadi intinya, batas 1 baris itu 5 foto. kalo ada 6 foto nanti dia bakal ada di baris selanjutnya. mangat riq aing gangerti :(-->
          <tr>
            <td><img class="lelah" src="<?php echo base_url();?>assets/foto/portfolio-img6.jpg"></td>
            <td><img class="lelah" src="<?php echo base_url();?>assets/foto/portfolio-img6.jpg"></td>
            <td><img class="lelah" src="<?php echo base_url();?>assets/foto/portfolio-img6.jpg"></td>
            <td><img class="lelah" src="<?php echo base_url();?>assets/foto/portfolio-img6.jpg"></td>
            <td><img class="lelah" src="<?php echo base_url();?>assets/foto/portfolio-img6.jpg"></td>
          </tr>
          <tr>
            <td><img class="lelah" src="<?php echo base_url();?>assets/foto/portfolio-img6.jpg"></td>
            <td><img class="lelah" src="<?php echo base_url();?>assets/foto/portfolio-img6.jpg"></td>
            <td><img class="lelah" src="<?php echo base_url();?>assets/foto/portfolio-img6.jpg"></td>
            <td><img class="lelah" src="<?php echo base_url();?>assets/foto/portfolio-img6.jpg"></td>
            <td><img class="lelah" src="<?php echo base_url();?>assets/foto/portfolio-img6.jpg"></td>
            
          </tr>
          <tr>
            <td><img class="lelah" src="<?php echo base_url();?>assets/foto/portfolio-img6.jpg"></td>
            <td><img class="lelah" src="<?php echo base_url();?>assets/foto/portfolio-img6.jpg"></td>
            <td><img class="lelah" src="<?php echo base_url();?>assets/foto/portfolio-img6.jpg"></td>
            <td><img class="lelah" src="<?php echo base_url();?>assets/foto/portfolio-img6.jpg"></td>
            <td><img class="lelah" src="<?php echo base_url();?>assets/foto/portfolio-img6.jpg"></td>
          </tr>
          
        </tbody>
          
        </table>
        
      </div>          
</div>
</body>
</html>