
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="localstellar,localstellar-script">
    <meta name="generator" content="localstellar">
    <title>Localstellar</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
   <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/jumbotron/jumbotron.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:#0e1e3d"> 
  <a class="navbar-brand" href="#">
    <img src="<?php echo base_url();?>public/images/localstellars-logo2.png" width="130" class="d-inline-block align-top"/>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>buy/<?php echo currentBaseCurrency();?>">Buy <?php echo currentBaseCurrency();?> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>sell/<?php echo currentBaseCurrency();?>">Sell <?php echo currentBaseCurrency();?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>advertise">Post a trade</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Help</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="<?php echo base_url();?>how-to-buy-stellar">How to buy Stellars</a>
          <a class="dropdown-item" href="<?php echo base_url();?>frequently-asked-questions">Frequently Asked Questions</a>
          <a class="dropdown-item" href="<?php echo base_url();?>guides">Guides</a>
          <a class="dropdown-item" href="<?php echo base_url();?>contact-support">Contact Support</a>
          <a class="dropdown-item" href="<?php echo base_url();?>blog">Blog</a>
          <a class="dropdown-item" href="<?php echo base_url();?>fees">Fees</a>
          <a class="dropdown-item" href="<?php echo base_url();?>about-us">About Us</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">US English</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">UK English</a>
          <a class="dropdown-item" href="#">Spanish</a>
          <a class="dropdown-item" href="#">French</a>
          <a class="dropdown-item" href="#">Dutch</a>
          <a class="dropdown-item" href="#">Russian</a>
          <a class="dropdown-item" href="#">Japanese</a>
          <a class="dropdown-item" href="#">Chinese</a>
          <a class="dropdown-item" href="#">Korean</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Using <?php echo currentBaseCurrency();?></a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <?php foreach(baseCurrencies() as $bc) : ?>
           <a class="dropdown-item" href="<?php echo base_url().'landing/setCoin/'.$bc['currency_symbol'];?>"><?php echo $bc['currency_symbol'];?> - <?php echo $bc['currency_name'];?></a>
          <?php endforeach ;?>
        </div>
      </li>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
      <?php if(!cUser('userId')){ ?>
      <a href="<?php echo base_url();?>auth/signup" class="btn btn-outline-success btn-sm my-2 my-sm-0">Signup Free</a>
      <a href="<?php echo base_url();?>auth/login" class="btn btn-outline-success btn-sm my-2 my-sm-0" style="margin:5px">Login</a>
      <?php }else{ ?>
      <a href="<?php echo base_url();?>welcome" class="btn btn-outline-success btn-sm my-2 my-sm-0">Dashboard</a>
      <a href="<?php echo base_url();?>profile" class="btn btn-outline-success btn-sm my-2 my-sm-0" style="margin:5px">Account</a>
      <?php } ?>
    </form>
  </div>
</nav>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h2 class="display-3">About Localstellar</h2>
      <h4>The Ultimate Open Source Exchange Script</h4>   
      <p></p>
      <p>
        <a class="btn btn-success btn-lg" href="<?php echo base_url();?>auth/signup" role="button">Signup Free &raquo;</a> &nbsp;
        <a href="https://apps.apple.com/us/app/localstellars-app/" target="_blank"><img src="<?php echo base_url();?>public/images/app-store-badge.svg" width="154.3" class="d-inline-block align-right"/></a>
        <a href="https://play.google.com/store/apps/details?id=com.localstellars.dev&hl=en" target="_blank"><img src="<?php echo base_url();?>public/images/google-play-badge.svg" width="154.3" class="d-inline-block align-right"/></a>
      </p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-left">
         Who We Are
        </h1>
        <hr>
        <blockquote>
        Localstellars is a cryptocurrency derivatives trading platform developed by Algobasket in March 2020 and registered in the BVI. 
        It is headquartered in Singapore. Languages added North America, Europe, Russia, 
        Japan, South Korea and Southeast Asia, and are focused on serving everyone from individual retail clients to professional derivatives traders.
         To these ends, we provide 24/7 multi-language online customer service in order to give solutions for our users in a timely manner and are committed to creating a fair, 
         transparent and efficient trading environment. Currently, the products on the platform include BTC/USD, ETH/USD, XRP/USD and EOS/USD perpetual contracts.
        </blockquote>
        <h1 class="text-left">
         Our Core Developer Team 
        </h1>
        <hr>
        <blockquote>
        Bybit is a cryptocurrency derivatives trading platform established in March 2018 and registered in the BVI. 
        It is headquartered in Singapore. We have users from all over the world including North America, Europe, Russia, 
        Japan, South Korea and Southeast Asia, and are focused on serving everyone from individual retail clients to professional derivatives traders.
         To these ends, we provide 24/7 multi-language online customer service in order to give solutions for our users in a timely manner and are committed to creating a fair, 
         transparent and efficient trading environment. Currently, the products on the platform include BTC/USD, ETH/USD, XRP/USD and EOS/USD perpetual contracts.
        </blockquote>
        <h1 class="text-left">
         Why Trade With Us  
        </h1>
        <hr>
        <blockquote>
        Bybit is a cryptocurrency derivatives trading platform established in March 2018 and registered in the BVI. 
        It is headquartered in Singapore. We have users from all over the world including North America, Europe, Russia, 
        Japan, South Korea and Southeast Asia, and are focused on serving everyone from individual retail clients to professional derivatives traders.
         To these ends, we provide 24/7 multi-language online customer service in order to give solutions for our users in a timely manner and are committed to creating a fair, 
         transparent and efficient trading environment. Currently, the products on the platform include BTC/USD, ETH/USD, XRP/USD and EOS/USD perpetual contracts.
        </blockquote>
      </div>
    </div>
    <br>
    <hr>
  </div> <!-- /container -->

</main>

<footer class="container">
  <div class="navbar-brand" href="#">
    <img src="<?php echo base_url();?>public/images/localstellars-logo2.png" width="250" class="d-inline-block align-right"/>
    <img src="<?php echo base_url();?>public/images/app-store-badge.svg" width="130" class="d-inline-block align-right"/>
    <img src="<?php echo base_url();?>public/images/google-play-badge.svg" width="130" class="d-inline-block align-right"/>
  </div>
  <p>
    <span class="font-weight-bold">&copy; LocalStellars 2017-2019 | Algobasket Production</span> 
    
    <br>
    <a class="text-decoration-none text-monospace text-secondary" href>About us</a> |
    <a class="text-decoration-none text-monospace text-secondary" href>Careers <label class="badge badge-pill badge-primary">Hiring</label></a> |
    <a class="text-decoration-none text-monospace text-secondary" href>Fees</a> |
    <a class="text-decoration-none text-monospace text-secondary" href>API</a> | 
    <a class="text-decoration-none text-monospace text-secondary" href>Bounty Program</a> |
    <a class="text-decoration-none text-monospace text-secondary" href>Affiliate</a> | 
    <a class="text-decoration-none text-monospace text-secondary" href>Terms of service</a> | 
    <a class="text-decoration-none text-monospace text-secondary" href>Privacy</a> | 
    <a class="text-decoration-none text-monospace text-secondary" href>Support</a> | 
    <a class="text-decoration-none text-monospace text-secondary" href>FAQ</a> |
    <a class="text-decoration-none text-monospace text-secondary" href>Block Explorer</a>
  </p>
  <center>
  Social Media - <a href="" class="text-decoration-none text-monospace text-secondary"><i class="fab fa-facebook-square"></i>

Facebook</a> | 
  <a href="" class="text-decoration-none text-monospace text-secondary">Twitter</a> |
  <a href="" class="text-decoration-none text-monospace text-secondary">Reddit</a> |
  <a href="" class="text-decoration-none text-monospace text-secondary">Telegram</a>
  </center>
  <br>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
