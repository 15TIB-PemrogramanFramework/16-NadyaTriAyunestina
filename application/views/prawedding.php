<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Likestudio</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" />

<!-- animate.css -->
<link rel="stylesheet" href="<?php echo base_url('assets/animate/animate.css');?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/animate/set.css');?>" />

<!-- gallery -->
<link rel="stylesheet" href="<?php echo base_url('assets/gallery/blueimp-gallery.min.css');?>"/>

<!-- favicon -->
<link rel="shortcut icon" href="<?php echo base_url('images/favicon.ico');?>" type="image/x-icon"/>
<link rel="icon" href="<?php echo base_url('images/favicon.ico');?>" type="image/x-icon"/>


<link rel="stylesheet" href="<?php echo site_url('assets/style.css');?>"/>

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#works"><img src="<?php echo site_url('images/Logo.png');?>" alt="logo"/></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>

            <?php $this->load->view('menu'); ?>



          </div>
        </div>

      </div>
    </div>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
<!-- #Header Starts -->

<!-- works -->
<div class="clearfix grid">
<div class="row">
        <?php foreach ($prawedding as $key => $value) { ?>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar_prawedding; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                
              </h4>
              <form role="form" action="<?php echo site_url('login');?>" method="POST">
                <ul class="list-group list-group-flush">
                   
                    <li class="list-group-item"> <?php echo $value->paket_prawedding; ?></li>
                    <li class="list-group-item"> <?php echo $value->deskripsi_prawedding;; ?></li>
                    <li class="list-group-item"><?php echo $value->harga_prawedding; ; ?></li>

                    <li class="list-group-item">
                        <center><input type="submit" class="btn btn-lg btn-success btn-block" value="Pesan" /></center>
                    </li>
                </ul>
                </form>
            </div>
          </div>
          
        </div><?php } ?>
 
      </div>
      </div>
<!-- works -->






<!-- Cirlce Starts -->
<div id="about"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Photo & Video at your service</h2>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4>Location</h4>
    <p><justify>LikeStudio Pekanbaru berlokasi di Jl.Sri Kandi No.8b, Delima, Tampan, Pekanbaru</justify></p>
    

  </div>
  <div class="col-sm-6 wowload fadeInRight">
  <h4>Sejarah </h4>
  <p><justify>Likestudio berdiri pada bulan Agustus tahun 2016. LikeStudio ini dibentuk oleh 4 sekawan yaitu, Danang, Dodi, Kenny dan Vinza yang awalnya hanya freelancer videographer saja. Tidak etis rasanya jika mereka ingin membesarkan nama namun tidak punya tempat atau studio. Dalam mendirikan likestudio ini mereka harus mengulang karir mereka dengan nama baru mulai dari nol lagi. Tak hanya itu, mereka harus mempromosikan likestudio dengan menawarkan harga yang lebih murah dari pasaran untuk menarik minat para clien.</justify></p>    
  </div>
  </div>

  <div class="process">
  <h3 class="text-center wowload fadeInUp"></h3>
  <ul class="row text-center list-inline  wowload bounceInUp">
     
    </ul>
  </div>
</div>
<!-- #Cirlce Ends -->



<!-- About Starts -->
<div class="highlight-info">
<div class="overlay spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
  <div class="col-sm-3 col-xs-6">
  
  </div>
</div>
</div>
</div>
</div>
<!-- About Ends -->







<div id="partners" class="container spacer ">
  <h2 class="text-center  wowload fadeInUp">Some of our happy clients</h2>
  <div class="clearfix">
    <div class="col-sm-6 partners  wowload fadeInLeft">
      
    </div>
    <div class="col-sm-6">


    <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight" data-ride="carousel">
    <div class="carousel-inner">  
     <div class="item active animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="<?php echo base_url('images/team/nadya.png');?>" width="100" class="img-circle img-responsive"/></div>
      <div  class="col-xs-10">
      <p> Untuk sebuah studio yang baru berdiri, dengan pelayanan customer yang sangat ramah dan tentunya murah membuat saya sangat suka mengabadikan
      momen saya di LikeStudio. </p>      
      <span>Nadya - <b>Mahasiswa</b></span>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="<?php echo base_url('images/team/raisa.png');?>" width="100" class="img-circle img-responsive"/></div>
      <div  class="col-xs-10">
      <p> Saya mengabadikan momen saya bersama keluarga saya di LikeStudio ini, dan yang membuat saya kagum adalah mereka membebaskan kita berekspresi ketika di foto, sehingga hasil foto keluarga kami pun tidak kaku rasanya</p>
      <span>Raisa - <b>Pengusaha</b></span>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="<?php echo base_url('images/team/isyana.png');?>" width="100" class="img-circle img-responsive"/></div>
      <div  class="col-xs-10">
      <p> Harga nya yang murah membuat saya berfikir 2 kali untuk berfoto di studio yang lain</p>
      <span>Isyana - <b>Pengusaha</b></span>
      </div>
      </div>
  </div>

   <!-- Indicators -->
    <ol class="carousel-indicators">
    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
    </ol>
    <!-- Indicators -->
  </div>



    </div>
  </div>


<!-- team -->
<h3 class="text-center  wowload fadeInUp">Our team</h3>
<p class="text-center  wowload fadeInLeft">Our creative team that is making everything possible</p>
<div class="row grid team  wowload fadeInUpBig">  
  <div class=" col-sm-3 col-xs-6">
  <figure class="effect-chico">
        <img src="<?php echo base_url('images/team/danang.jpg');?>" alt="img01" class="img-responsive" />
        <figcaption>
            <p><b>Danangkulivideo</b><br>Videographer<br><br><a href="https://www.instagram.com/danangkulivideo/?hl=en"><i class="fa fa-instagram"></i></a> <a href="https://www.facebook.com/danank.sanjaya?ref=ts&fref=ts"><i class="fa fa-facebook"></i></a></p>            
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
  <figure class="effect-chico">
        <img src="<?php echo base_url('images/team/dodi.jpg');?>" alt="img01"/>
        <figcaption>            
            <p><b>Dody</b><br>Photographer<br><br><a href="https://www.instagram.com/dodypratamadp/?hl=en"><i class="fa fa-instagram"></i></a> <a href="https://www.facebook.com/dodypratamaDP?fref=ts"><i class="fa fa-facebook"></i></a></p>             
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
  <figure class="effect-chico">
        <img src="<?php echo base_url('images/team/kenny.jpg');?>" alt="img01"/>
        <figcaption>
            <p><b>Kenny</b><br>Photographer<br><br><a href="https://www.instagram.com/kennypictures/?hl=en"><i class="fa fa-instagram"></i></a> <a href="https://www.facebook.com/kennykurniawan674"><i class="fa fa-facebook"></i></a></p>          
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
  <figure class="effect-chico">
        <img src="<?php echo base_url('images/team/vinza.png');?>" alt="img01"/>
        <figcaption>
            <p><b>Vinza</b><br>Videographer<br><br><a href="https://www.instagram.com/vinzaputra86/?hl=en"><i class="fa fa-instagram"></i></a> <a href="https://www.facebook.com/vinzap?fref=ts"><i class="fa fa-facebook"></i></a></p> 
        </figcaption>
    </figure>
    </div>

 
</div>
<!-- team -->

</div>


<!--Contact Starts-->
<div id="contact" class="spacer">

<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp"></h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
       
      </div>
  </div>



</div>
</div>
<!--Contact Ends-->



<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX"> <a href="https://www.instagram.com/likestudio/?hl=en"><i class="fa fa-instagram fa-2x"></i></a></p>
Copyright 2014 Likestudio Pekanbaru. All rights reserved.
</div>
<!-- # Footer Ends -->
<a href="#works" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>



<!-- jquery -->
<script src="<?php echo base_url('assets/jquery.js');?>"/></script>

<!-- wow script -->
<script src="<?php echo base_url('assets/wow/wow.min.js');?>"/></script>


<!-- boostrap -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js');?>" type="text/javascript" /></script>

<!-- jquery mobile -->
<script src="<?php echo base_url('assets/mobile/touchSwipe.min.js');?>"/></script>
<script src="<?php echo base_url('assets/respond/respond.js');?>"/></script>

<!-- gallery -->
<script src="<?php echo base_url('assets/gallery/jquery.blueimp-gallery.min.js');?>"/></script>

<!-- custom script -->
<script src="<?php echo base_url('assets/script.js');?>"/></script>

</body>
</html>