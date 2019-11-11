
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
      <div class="col-md-6"> 
          <div class="card">
            <div class="card-header">
              <h2><?php echo $this->uri->segment(3);?></h2>
            </div>
            <div class="card-body">
              <footer class="blockquote-footer">
                  Exchange RIA/MG to btc. Search partners for long term.
                  only for cooperation:
                  WhatsApp +380662360261
                  Telegram: @Gronbtc
                  По вопрусам сотрудничества пишите в телеграм.
              </footer>
               <h3>Information on <?php echo $this->uri->segment(3);?></h3> 
              <blockquote class="blockquote mb-0">
                <table class="table table-sm" style="font-size:small"> 
                  <tr>
                    <th>Trade Volume</th>
                    <td></td>
                  </tr> 
                  <tr>
                    <th>Number Of Confirmed Trades</th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Feedback Score</th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>First Purchase</th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Account Created</th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Last Seen</th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Language</th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Phone Number</th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>ID, Passport or Driver’s</th> 
                    <td></td>
                  </tr>
                  <tr>
                    <th>License</th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Trust</th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Blocks</th>
                    <td></td>
                  </tr>
                </table>
              </blockquote>
             
            </div>  
          </div>
      </div>
      <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Do Your Trust <?php echo $this->uri->segment(3);?> ? </h5>
                <p class="card-text">You do not currently trust <?php echo $this->uri->segment(3);?>.</p>
                <a href="#" class="btn btn-primary">Press here if you trust</a>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Seller escrow release times</h5>
                <p class="card-text">Median: 85 min</p>
                <p class="card-text">Average: 142 min</p>
              </div>
            </div>
      </div>
    </div>
    <br>
    <div class="row">
      <h4 class="display-6">Buy stellars online from <?php echo $this->uri->segment(3);?></h4>
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
             <th scope="row"><?php echo $this->uri->segment(3);?></th>
             <td>Paypal</td>
             <td>Otto</td>
             <td>@mdo</td>
             <td><?php echo anchor('ad/ER34NGF2C/','Buy','class="btn btn-outline-dark"');?></td>
           </tr>
         </tbody>
        </table>
    </div>

    <br>
    <div class="row">
      <h4 class="display-6">Sell stellars online to <?php echo $this->uri->segment(3);?></h4> 
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
             <th scope="row"><?php echo $this->uri->segment(3);?></th>
             <td>Bank Transfer</td>
             <td>Otto</td>
             <td>@mdo</td>
             <td><?php echo anchor('ad/ER34NGF2C/','Sell','class="btn btn-outline-dark"');?></td>
           </tr>
         </tbody>
        </table>
    </div>
     
     <br>
     <div class="row">
      <h4 class="display-6">Feedback -  <small>Positive <span class="badge badge-success">45</span> | Neutral <span class="badge badge-warning">34</span> | Negative <span class="badge badge-danger">0</span></small></h4>
      <div class="col-md-12">
        <ul class="list-unstyled">
          <li class="media">
            <div class="media-body">
             Feedback left by users with noticeable trade volume.
            </div>
          </li>
          <br>
          <li class="media">
            <img src="<?php echo base_url();?>public/landing-2/images/team-7.jpg" class="mr-3" alt="..." width="60">
            <div class="media-body">
              <h5 class="mt-0 mb-1">Mark Zuck</h5>
              Amazing trader and response within a minute and very good in communication. Thanks!
            </div>
          </li>
          <li class="media my-4">
            <img src="<?php echo base_url();?>public/landing-2/images/team-4.jpg" class="mr-3" alt="..." width="60">
            <div class="media-body">
              <h5 class="mt-0 mb-1">Tom Cruise</h5>
              Very good and I will buy more stellars from him. 
            </div>
          </li>
          <li class="media">
            <img src="<?php echo base_url();?>public/landing-2/images/team-3.jpg" class="mr-3" alt="..." width="60">
            <div class="media-body">
              <h5 class="mt-0 mb-1">Robert Junior</h5>
               Perfect Trader and receive my stellar at low market price .
            </div>
          </li>
        </ul>
      </div>
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
