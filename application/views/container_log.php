
  <!-- isinya container kalo udah login, baik itu voters atau artist (EXPLORE)
  ================================================== -->
    <link rel="stylesheet" href="css/animate.min.css">

  <!-- Font Icons CSS
   ================================================== -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/ionicons.min.css">

  <!-- Main CSS
   ================================================== -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Google web font 
   ================================================== --> 
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

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
        <tbody>      
          <tr>
            <?php foreach ($posts as $foto) : ?>
            <input type="hidden" name="id" value="<?php echo $foto['id']; ?>">
            <td><a href="<?php echo site_url('home/'.$foto['id']); ?>"><img class="lelah" src="<?php echo base_url();?>assets/foto/posts/<?php echo $foto['image']; ?>"></a></td>
            <?php endforeach; ?>
          </tr>
        </tbody>
          
        </table>
        
      </div>          
</div>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
</html>