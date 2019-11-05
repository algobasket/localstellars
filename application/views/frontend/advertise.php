
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Advertise</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />

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
    <link href="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?php echo base_url();?>public/images/localstellars-logo2.png" alt="" width="400">
    <h2>Create a stellar trade advertisement</h2>
    <p class="lead">Advertisement rules and requirements</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Opening hours </span>
        <small class="text-muted">(optional)</small>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Sunday</h6>
            <small class="text-muted">change</small>
          </div>
          <span class="text-muted">00:00AM-00:00PM</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Monday</h6>
            <small class="text-muted">change</small>
          </div>
            <span class="text-muted">00:00AM-00:00PM</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Tuesday</h6>
            <small class="text-muted">change</small>
          </div>
            <span class="text-muted">00:00AM-00:00PM</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Wednesday</h6>
            <small>change</small>
          </div>
            <span class="text-muted">00:00AM-00:00PM</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Thursday</h6>
            <small class="text-muted">change</small>
          </div>
            <span class="text-muted">00:00AM-00:00PM</span> 
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Friday</h6>
            <small class="text-muted">change</small>
          </div>
            <span class="text-muted">00:00AM-00:00PM</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Saturday</h6>
            <small class="text-muted">change</small>
          </div>
            <span class="text-muted">00:00AM-00:00PM</span>
        </li>
      </ul>

      <p class="card p-2">
        <small>Optional. Days and hours when you want your advertisement to be automatically shown and hidden.</small>
      </p>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Trade Type</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">I Want To ..</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Sell your stellars online</option>
              <option>Buy stellars online</option>
            </select>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Currency</label>
            <select class="custom-select d-block w-100" id="country" required>
              <?php foreach(currencies() as $c) : ?>
                   <option value="<?php echo $c['currency_symbol'];?>"><?php echo $c['currency_name'];?></option>
              <?php endforeach ?>
            </select>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Location</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">📌</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Enter a location" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your location is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Bank Name <span class="text-muted">(Required - The name or identifying code of the bank you are using.)</span></label>
          <input type="email" class="form-control" id="email" placeholder="Enter bank name or identifying code ">
          <div class="invalid-feedback">
            Please enter your bank name or identifying code.
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Margin <span class="text-muted">(Margin you want over the stellar market price...)</span></label>
          <div class="input-group">
            <input type="text" class="form-control" id="username" placeholder="Percent" required>
            <div class="input-group-append">
              <span class="input-group-text">%</span>
            </div>
            <div class="invalid-feedback" style="width: 100%;">
              Your marginal percentage is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Price Equation <span class="text-muted">(Want to know?)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="xmr_in_usd">
          <small class="text-muted">Trade price with current market value </small>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="country">Minimium transaction limit</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please provide the min limit.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="state">Maximum transaction limit</label>
            <select class="custom-select d-block w-100" id="state" required>
              <option value="">Choose...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide the max limit.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <h4 class="mb-3">Liquidity options</h4>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Track liquidity</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Security options</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="checkbox" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Identified people only</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="checkbox" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">SMS verification required</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="checkbox" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">Trusted people only</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="cc-name">Terms of trade</label>
            <textarea class="form-control" id="cc-name" placeholder="Terms of trade description" required></textarea>
            <small class="text-muted">
              <span>Other information you wish to tell about your trade.
                Example 1: This advertisement is only for cash trades. If you want to pay online, contact localstellars.com/ad/1234. Example 2: Please make request only when you can complete the payment with cash within 12 hours.</span>
              </small>
            <div class="invalid-feedback">
              Description and terms of trade is required
            </div>
          </div>
        </div>
        <br class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="i-agree">
          <label class="custom-control-label" for="i-agree">I agree to publish this advertisement</label>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Publish advertisement</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <img src="<?php echo base_url();?>public/images/localstellars-logo2.png" width="160" class="d-inline-block align-top"/>
    <p class="mb-1"><small>&copy; LocalStellars 2017-2019 | Algobasket Production</small></p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
      <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script>
    </body>
</html>
