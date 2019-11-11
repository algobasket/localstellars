
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

      select.btn-mini {
        height: auto;
        line-height: 14px;
        font-size: 14px;
      }

    /* this is optional (see below) */
    select.btn {
        -webkit-appearance: button;
           -moz-appearance: button;
                appearance: button;
        padding-right: 16px;
    }

    select.btn-mini + .caret {
        margin-left: -20px;
        margin-top: 9px;
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?php echo base_url();?>public/images/localstellars-logo2.png" alt="" width="400">
    <h2><?php echo lang('advertise_title');?></h2>
    <p class="lead"><?php echo lang('advertise_subtitle');?></p>
  </div>
 <?php echo form_open('/advertise','class="needs-validation" novalidate'); ?>
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted"><?php echo lang('advertise_openhours');?></span>

      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?php echo lang('common_sun');?></h6>
          </div>
          <span class="text-muted" >
            <i class="far fa-clock"></i>&nbsp;
            <select class="btn btn-outline-success btn-mini" name="openingHours[sunday_start]">
              <option>Start</option>
              <?php
              foreach(openingHours() as $hour)
              {
                  echo '<option value="'.$hour.'">' . $hour . '</option>';
              }
              ?>
            </select>
            -
            <select class="btn btn-outline-success btn-mini" name="openingHours[sunday_end]">
              <option>End</option>
              <?php
              foreach(openingHours() as $hour)
              {
                  echo '<option value="'.$hour.'">' . $hour . '</option>';
              }
              ?>
            </select>
          </span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?php echo lang('common_mon');?></h6>
          </div>
          <span class="text-muted">
            <i class="far fa-clock"></i>&nbsp;
            <select class="btn btn-outline-success btn-mini" name="openingHours[monday_start]">
              <option>Start</option>
              <?php
              foreach(openingHours() as $hour)
              {
                  echo '<option value="'.$hour.'">' . $hour . '</option>';
              }
              ?>
            </select>
            -
            <select class="btn btn-outline-success btn-mini" name="openingHours[monday_end]">
              <option>End</option>
              <?php
              foreach(openingHours() as $hour)
              {
                  echo '<option value="'.$hour.'">' . $hour . '</option>';
              }
              ?>
            </select>
          </span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?php echo lang('common_tue');?></h6>
          </div>
          <span class="text-muted">
            <i class="far fa-clock"></i>&nbsp;
            <select class="btn btn-outline-success btn-mini" name="openingHours[tuesday_start]">
              <option>Start</option>
              <?php
              foreach(openingHours() as $hour)
              {
                  echo '<option value="'.$hour.'">' . $hour . '</option>';
              }
              ?>
            </select>
            -
            <select class="btn btn-outline-success btn-mini" name="openingHours[tuesday_end]">
              <option>End</option>
              <?php
              foreach(openingHours() as $hour)
              {
                  echo '<option value="'.$hour.'">' . $hour . '</option>';
              }
              ?>
            </select>
          </span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div>
            <h6 class="my-0"><?php echo lang('common_wed');?></h6>
          </div>
          <span class="text-muted">
            <i class="far fa-clock"></i>&nbsp;
            <select class="btn btn-outline-success btn-mini" name="openingHours[wed_start]">
              <option>Start</option>
              <?php
              foreach(openingHours() as $hour)
              {
                  echo '<option value="'.$hour.'">' . $hour . '</option>';
              }
              ?>
            </select>
            -
            <select class="btn btn-outline-success btn-mini" name="openingHours[wed_end]">
              <option>End</option>
              <?php
              foreach(openingHours() as $hour)
              {
                  echo '<option value="'.$hour.'">' . $hour . '</option>';
              }
              ?>
            </select>
          </span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?php echo lang('common_thu');?></h6>
          </div>
          <span class="text-muted">
            <i class="far fa-clock"></i>&nbsp;
            <select class="btn btn-outline-success btn-mini" name="openingHours[thursday_start]">
              <option>Start</option>
              <?php
              foreach(openingHours() as $hour)
              {
                  echo '<option value="'.$hour.'">' . $hour . '</option>';
              }
              ?>
            </select>
            -
            <select class="btn btn-outline-success btn-mini" name="openingHours[thursday_end]">
              <option>End</option>
              <?php
              foreach(openingHours() as $hour)
              {
                  echo '<option value="'.$hour.'">' . $hour . '</option>';
              }
              ?>
            </select>
          </span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?php echo lang('common_fri');?></h6>
          </div>
          <span class="text-muted">
            <i class="far fa-clock"></i>&nbsp;
            <select class="btn btn-outline-success btn-mini" name="openingHours[friday_start]">
              <option>Start</option>
              <?php
              foreach(openingHours() as $hour)
              {
                  echo '<option value="'.$hour.'">' . $hour . '</option>';
              }
              ?>
            </select>
            -
            <select class="btn btn-outline-success btn-mini" name="openingHours[friday_end]">
              <option>End</option>
              <?php
              foreach(openingHours() as $hour)
              {
                  echo '<option value="'.$hour.'">' . $hour . '</option>';
              }
              ?>
            </select>
          </span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?php echo lang('common_sat');?></h6>
          </div>
          <span class="text-muted">
            <i class="far fa-clock"></i>&nbsp;
            <select class="btn btn-outline-success btn-mini" name="openingHours[saturday_start]">
              <option>Start</option>
              <?php
              foreach(openingHours() as $hour)
              {
                  echo '<option value="'.$hour.'">' . $hour . '</option>';
              }
              ?>
            </select>
            -
            <select class="btn btn-outline-success btn-mini" name="openingHours[saturday_end]">
              <option>End</option>
              <?php
              foreach(openingHours() as $hour)
              {
                  echo '<option value="'.$hour.'">' . $hour . '</option>';
              }
              ?>
            </select>
          </span>
        </li>
      </ul>

      <p class="card p-2">
        <small><?php echo lang('advertise_openhours_t');?></small>
      </p>
    </div>
    <div class="col-md-8 order-md-1">
      <?php echo getFlash();?>
      <h4 class="mb-3"><?php echo lang('advertise_formFillUp');?></h4>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="tradeType"><?php echo lang('advertise_tradeType');?></label>
            <select class="custom-select d-block w-100" id="tradeType"name="tradeType" required>
              <option value="1"><?php echo lang('advertise_tradeType_1');?></option>
              <option value="2"><?php echo lang('advertise_tradeType_2');?></option>
            </select>
            <div class="invalid-feedback">
              <?php echo lang('advertise_tradeType_error');?>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="currency"><?php echo lang('common_currency');?></label>
            <select class="custom-select d-block w-100" id="currency" name="currency" required>
              <?php foreach(currencies('fiat') as $c) : ?>
                   <option value="<?php echo $c['currency_symbol'];?>"><?php echo $c['currency_name'];?></option>
              <?php endforeach ?>
            </select>
            <div class="invalid-feedback">
              <?php echo lang('advertise_currency_required');?>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Location</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-map-marker-alt"></i>
              </span>
            </div>
            <input type="text" class="form-control" id="locationTextField" placeholder="Enter a location" name="location" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your location is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="bankName">Bank Name <span class="text-muted">(Required - The name or identifying code of the bank you are using.)</span></label>
          <input type="text" class="form-control" id="bankName" placeholder="Enter bank name or identifying code " name="bankName" required>
          <div class="invalid-feedback">
            Please enter your bank name or identifying code.
          </div>
        </div>

        <div class="mb-3">
          <label for="marginPercentage">Margin <span class="text-muted">(Margin you want over the stellar market price...)</span></label>
          <div class="input-group">
            <input type="text" class="form-control" id="marginPercentage" name="marginPercentage" placeholder="Percent" required>
            <div class="input-group-append">
              <span class="input-group-text">%</span>
            </div>
            <div class="invalid-feedback" style="width: 100%;">
              Your marginal percentage is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="priceEquation">Price Equation <span class="text-muted">(Want to know?)</span></label>
          <input type="text" class="form-control" id="priceEquation" name="priceEquation" placeholder="XLM_IN_USD" value="XLM_IN_USD" >
          <small class="text-muted">Trade price with current market value </small>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="country">Minimium transaction limit</label>
            <div class="input-group">
              <input type="number" class="form-control" name="minTran" value="1" aria-label="Dollar amount (with dot and two decimal places)">
              <div class="input-group-append">
                <span class="input-group-text min_tx_lm">USD</span>
              </div>
            </div>
            <div class="invalid-feedback">
              Please provide the min limit.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="state">Maximum transaction limit</label>
            <div class="input-group">
              <input type="number" class="form-control" name="maxTran" value="100" aria-label="Dollar amount (with dot and two decimal places)">
              <div class="input-group-append">
                <span class="input-group-text max_tx_lm">USD</span>
              </div>
            </div>
            <div class="invalid-feedback">
              Please provide the max limit.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <h4 class="mb-3">Liquidity options</h4>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="liquidityOption" name="liquidityOption">
          <label class="custom-control-label" for="liquidityOption">Track liquidity</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Security options</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="securityOption[identified_people_only]" type="checkbox" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Identified people only</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="securityOption[sms_verification]" type="checkbox" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">SMS verification required</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="securityOption[trusted_people_only]" type="checkbox" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">Trusted people only</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="cc-name">Terms of trade</label>
            <textarea class="form-control" id="cc-name" name="description" placeholder="Terms of trade description" required></textarea>
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
          <input type="checkbox" class="custom-control-input" id="i-agree" name="iAgree">
          <label class="custom-control-label" for="i-agree">I agree to publish this advertisement</label>
        </div>
        <hr class="mb-4">
        <?php //if($this->session->userdata('uid')){ ?>
         <button class="btn btn-primary btn-lg btn-block" type="submit">Publish advertisement</button>
        <?php //}else{ ?>
         <!-- <a class="btn btn-primary btn-lg btn-block" href="<?php echo base_url();?>auth/login">Login Required To Publish Advertisement</a> -->
        <?php //} ?>

    </div>
  </div>
<?php echo form_close();?>
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

<div class="modal" id="openingHoursModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Set Opening Hours</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Set & Save</button>
      </div>
    </div>
  </div>
</div>
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsZ2W1tgDNKzl8kNCMRlur70Ebs0n5odw&libraries=places"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAsZ2W1tgDNKzl8kNCMRlur70Ebs0n5odw&sensor=false&libraries=places"></script>
<script>
function init() {
    var input = document.getElementById('locationTextField');
    var autocomplete = new google.maps.places.Autocomplete(input);
}

google.maps.event.addDomListener(window, 'load', init);
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
      <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script>
      <script>
      $('document').ready(function(){
        $('#currency').change(function(){
           var val = $(this).val();
           var equation = '<?php echo lang('common_basecurrency');?>' + '_IN_'+val;
           $('#priceEquation').val(equation);
           $('.min_tx_lm').html(val);
           $('.max_tx_lm').html(val); 
        });
      });
      </script>
    </body>
</html>
