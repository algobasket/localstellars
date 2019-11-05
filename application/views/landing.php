
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
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">
    <img src="<?php echo base_url();?>public/images/localstellars-logo2.png" width="130" class="d-inline-block align-top"/>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>buy">Buy Stellars <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>sell">Sell Stellars</a>
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
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
      <a href="<?php echo base_url();?>auth/signup" class="btn btn-outline-success btn-sm my-2 my-sm-0">Signup Free</a>
      <a href="<?php echo base_url();?>auth/login" class="btn btn-outline-success btn-sm my-2 my-sm-0" style="margin:5px">Login</a>
    </form>
  </div>
</nav>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h2 class="display-3">Buy and sell stellars near you</h2>
      <h4>Instant. Secure. Private.</h4>
      <p> Trade stellars in <strong>7812 cities</strong> and <strong>248 countries</strong> including India.</p>
      <p><a class="btn btn-success btn-lg" href="<?php echo base_url();?>auth/signup" role="button">Signup Free &raquo;</a></p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center">
          <div class="btn-group btn-group-lg">
           <a href="#" class="btn btn-outline-secondary btn-light">Quick Buy</a>
           <a href="#" class="btn btn-outline-secondary btn-light">Quick Sell</a>
          </div>
        </h2>
        <p>Choose from more than 30 payment methods. Most trades complete in a few minutes, however this largely depends on the chosen payment method. </p>
        <div class="input-group">
         <input type="text" id="" class="form-control" placeholder="Amount"/>
         <select class="form-control">
          <option>Currency</option>
         </select>

         <select class="form-control">
           <?php foreach(countries() as $country) : ?>
            <option value="<?php echo $country['sortname'];?>" <?php echo ($country['sortname'] == $deviceInfo['ipCountry']) ? "selected":"";?>>
              <?php echo $country['name'];?>
            </option>
           <?php endforeach ?>
         </select>
         <select class="form-control">
          <option>All Online Offers</option>
         </select>
         <div class="input-group-append">
           <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
         </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <h4 class="display-6">Buy stellars online in <?php echo $deviceInfo['countryName'];?></h4>
      <table class="table">
         <thead>
           <tr>
             <th scope="col">Seller</th>
             <th scope="col">Payment method</th>
             <th scope="col">Price/XMR</th>
             <th scope="col">Limits</th>
             <th scope="col"></th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <th scope="row">1</th>
             <td>Mark</td>
             <td>Otto</td>
             <td>@mdo</td>
             <td><?php echo anchor('ad/ER34NGF2C/','Buy','class="btn btn-outline-dark"');?></td>
           </tr>
         </tbody>
        </table>
    </div>

    <br>
    <div class="row">
      <h4 class="display-6">Sell stellars online in <?php echo $deviceInfo['countryName'];?></h4>
      <table class="table">
         <thead>
           <tr>
             <th scope="col">Buyer</th>
             <th scope="col">Payment method</th>
             <th scope="col">Price/XMR</th>
             <th scope="col">Limits</th>
             <th scope="col"></th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <th scope="row">1</th>
             <td>Mark</td>
             <td>Otto</td>
             <td>@mdo</td>
             <td><?php echo anchor('ad/ER34NGF2C/','Sell','class="btn btn-outline-dark"');?></td>
           </tr>
         </tbody>
        </table>
    </div>

    <hr>
  </div> <!-- /container -->

</main>

<footer class="container">
  <a class="navbar-brand" href="#">
    <img src="<?php echo base_url();?>public/images/localstellars-logo2.png" width="130" class="d-inline-block align-top"/>
  </a>
  <p>&copy; LocalStellars 2017-2019 | Algobasket Production</p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
