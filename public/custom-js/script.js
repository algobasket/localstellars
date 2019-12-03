
$(document).ready(function(){
    let path = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port;
    $('.updateProfile').click(function(){
        var object = {
            fname : $('#full-name').val(),
            email : $('#email-address').val(),
            mobile : $('#mobile-number').val(),
            dob : $('#date-of-birth').val(),
            nationality : $('#nationality').val(),
            api : true
        };
        let path = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port;
        $.post(path + '/Api/User/updateProfile',object,function(data,status){
           if(status == 'success'){
             console.log(data);
             $('.updatePersonalDataSuccess').show();
           }
        })
    });
     $('.updateSettings').click(function(){
        var object = {
            save_log : ($('#save-log:checked').val() == null) ? 0 : 1,
            pass_change_confirm : ($('#pass-change-confirm:checked').val() == null) ? 0 : 1,
            latest_news : ($('#latest-news:checked').val() == null) ? 0 : 1,
            activity_alert : ($('#activity-alert:checked').val() == null) ? 0 : 1,
            api : true
        };
        //console.log(object);
        let path = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port;
        $.post(path + '/Api/User/updateSettings',object,function(data,status){
           if(status == 'success'){
             console.log(data);
             $('.updateSettingsSuccess').show();
           }
        })
    });
    $('.updatePassword').click(function(){
    var object = {
        old_pass : $('#old-pass').val(),
        new_pass : $('#new-pass').val(),
        confirm_pass : $('#confirm-pass').val(),
        api : true
    };
    if(object.old_pass =="") {$('#old-pass').css('border','1px solid red');}
    if(object.new_pass == "") {$('#new-pass').css('border','1px solid red');}
    if(object.confirm_pass == ""){$('#confirm-pass').css('border','1px solid red');}
    let path = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port;


    $.post(path + '/Api/User/isUserPasswordValid',object,function(data,status){

       if(data == 1){
             $('#old-pass').css('border','');
             $('#updatePasswordError').html('');

              if((object.new_pass == object.confirm_pass) && (object.new_pass !="") && (object.confirm_pass !="")){

                $.post(path + '/Api/User/changeUserPassword',{ password : object.new_pass,api : true },function(data2,status2){
                    console.log(data2);
                   if(data2 == 1){
                    $('.updatePasswordSuccess').show();
                   }
                })

            $('#new-pass').css('border','');
            $('#confirm-pass').css('border','');
           }else{
             $('#updatePasswordError').html('<label class="badge badge-danger">New Password and Confirm Password Wrong</label>');
           }

       }else{
        $('#old-pass').css('border','1px solid red');
        $('#updatePasswordError').html('<span class="badge badge-danger">Wrong Current Password</span>');
       }

    })


    // $.post('./Api/User/updateSettings',object,function(data,status){
    //    if(status == 'success'){
    //      console.log(data);
    //      $('.updateSettingsSuccess').show();
    //    }
    // })
});


$('.cal').click(function(){
        var coinSymbol = $(this).data('asset');
        var tokenBaseAmount = $('#token-base-amount').val();
        var object = {
            coinSymbol : coinSymbol,
            tokenBaseAmount : tokenBaseAmount,
            api : true
        };
        let path = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port;

        $.post(path +'/Api/currencies/calculateTokenPrice',object,function(data,status){
           if(status == 'success'){
             $('.displaySymbol').html(coinSymbol);
             $('.token-amount').html(data);
             $('.buyToken').attr('data-currencysymbol',coinSymbol);
             $('.buyToken').attr('data-amttoken',tokenBaseAmount);
             $('.buyToken').attr('data-xxatoken',data);

             $('#paymentblock').slideDown();
             $('.buyTokenXXA').html(data+ ' XXA');
             $('.payAmount').html(tokenBaseAmount+' '+coinSymbol);
           }
        })
});

$('.clickToCalculate').click(function(){
        var currencySymbol = $(this).data('asset');
        var tokenCost = $('#token-base-amount').val();
        var object = {
            coinSymbol : currencySymbol,
            tokenBaseAmount : tokenCost,
            api : true
        };
        let path = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port;

        $.post(path +'/Api/currencies/calculateTokenPrice',object,function(data,status){
           if(status == 'success'){
             $('.displaySymbol').html(currencySymbol);
             $('.token-amount').html(data);
             $('.clickToCalculate').attr('data-currencysymbol',currencySymbol);
             $('.clickToCalculate').attr('data-amttoken',tokenCost);
             $('.clickToCalculate').attr('data-xxatoken',data);

             $('#paymentblock').slideDown();
             $('.buyTokenXXA').html(data+ ' XXA');
             $('.payAmount').html(tokenCost+' '+currencySymbol);
           }
        })
});


$('.buyToken').click(function(){
    window.location.href= '/buy-token/?cs=' + $(this).data('currencysymbol') + '&amtToken=' + $(this).data('amttoken') + '&xxaToken=' + $(this).data('xxatoken');
});

$('.buyTokenAndPay').click(function(){
    let path = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port;
    if($('#agree-term-3:checked').val() == 'on'){
         if($('#pay-paypal:checked').val() == 'on'){

          var amount   =  $('.clickToCalculate').data('amttoken');
          var currency =  $('.clickToCalculate').data('currencysymbol');
          var token    =  $('.clickToCalculate').data('xxatoken');
          var query = '?amount='+amount+'&currency='+currency+'&token='+token;

            window.location.href= '/Payment/paypal/'+ query;

        }
        if($('#pay-coingate:checked').val() == 'on'){

        }
        if($('#pay-coinpayments:checked').val() == 'on'){

        }
    }else{
        alert("Check the agreement to proceed further");
    }

});

$('.saveSettings').click(function(){
     var json_data = $('.json_data').val();
     let path = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port;
    if($('#CheckBox_15:checked').val() == "on")
    {
       var object = {
         setting_name : 'page_block',
         json : json_data,
         status : 1
       }
       $.post(path+'/Api/Settings/frontend_page',object,function(data,status){
          if(status == "success"){
           $('.notify').html('<span class="badge badge-success">Setting Saved!</span>');
          }
       });
    }else{
       var object = {
         setting_name : 'page_block',
         json : json_data,
         status : 2
       }
       $.post(path+'/Api/Settings/frontend_page',object,function(data,status){
          if(status == "success"){
           $('.notify').html('<span class="badge badge-success">Setting Saved!</span>');
          }
       });
    }
});

$('#addWallet').click(function(){
   var token_addr = $('#token-address').val();
   var object = {
      token_addr : token_addr
    };
    let path = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port;
   $.post(path + '/Api/User/addUserWallet',object,function(data,status){
     console.log(status);
     if(status == 'success'){
       $('#notify').html('<span class="text-success"><em class="ti ti-check-box"></em> Added wallet address</span>');
     }else{
       $('#notify').html('<span class="text-danger"> Error adding wallet address</span>');
     }
   });
});

$('#swalllet').change(function(){
    var val = $(this).val();
    $('#token-address').attr('placeholder',"Enter your "+val+' address');
});


$('#term-condition').click(function(e){
    if($('#term-condition:checked').val() == 'on' && $('#info-correct:checked').val() == 'on')
    {
       $('#processToVerify').removeAttr('disabled');
    }else{
        $('#processToVerify').attr('disabled',"''");
    }
});

$('#info-correct').click(function(e){
    if($('#term-condition:checked').val() == 'on' && $('#info-correct:checked').val() == 'on')
    {
       $('#processToVerify').removeAttr('disabled');
    }else{
        $('#processToVerify').attr('disabled',"''");
    }
});

$('.pay-confirm').click(function(){
          var amount   =  $('.clickToCalculate').attr('data-amttoken');
          var currency =  $('.clickToCalculate').attr('data-currencysymbol');
          var token    =  $('.clickToCalculate').attr('data-xxatoken');
          //var query = '?amount='+amount+'&currency='+currency+'&token='+token;
          //window.location.href= '/Payment/directCrypto/'+ query;
          let path = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port;
          var data = {
            'amount' : amount,
            'currency' : currency,
            'token' : token
          };
          $.ajax({
            type:'POST',
            url:path + '/Api/Payment/directCrypto',
            data:data,
            success:function(res){
              $('#get-pay-address').modal('hide');
              $('#pay-confirm').modal('show');
              $('#makeOrderNumber').html(res);
              $('.clickToCalculate').attr('data-ordernumber',res);
                 //  console.log(res);
              // $.post(path+'/Api/Payment/createUniqueOrderId',{},function(data2,status){
              //      console.log(data2);
              //   $('.clickToCalculate').attr('data-ordernumber',data2);
              // });

            }
          });
});

$('.confirm-wallet-addr').click(function(){
    var address_from = $('#send-from-wallet-address').val();
    var transaction_id = $('#transaction-id-got').val();
    var order_number = $('.clickToCalculate').attr('data-ordernumber');
    var data = {
        'address_from' : address_from,
        'transaction_id' : transaction_id,
        'order_number' : order_number
    };
    //console.log(data.address_from +','+data.transaction_id+','+data.order_number);
    let path = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port;
    $.ajax({
        type:'POST',
        url:path + '/Api/Payment/confirmTransactionId',
        data:data,
        success:function(res){
          $('#pay-confirm').modal('hide');
          $('#pay-review').modal('show');
          // $.post(path+'/Api/Payment/createUniqueOrderId',{},function(data2,status){
          //      console.log(data2);
          //   $('.clickToCalculate').attr('data-ordernumber',data2);
          // });

        }
    });
});

$('#selectedCoin').change(function(){
  let path = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port;
  var coin = $(this).val();
  console.log(coin);
  window.location.href= path + "/Landing/setCoin/" + coin; 
});

$('.btn_vacation').click(function(){
    var sellingVac = $('#sellingVac:checked').val() ? 1 : 0;
    var buyingVac  = $('#buyingVac:checked').val() ? 1 : 0;
   
    var data = {
        'sv' : sellingVac, 
        'bv' : buyingVac
    };
    console.log(data); 
    let path = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port;
    $.ajax({
        type:'POST',
        url:path + '/Api/User/on_vacation', 
        data:data,
        success:function(res){ 
          $('#vacation_s').html('<span class="text-success"> Changes Saved</span>');
        }
    });
});

$('#sendOTP').click(function(){ 
   
    var data = {
        'api' : true 
    };
    console.log(data); 
    let path = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port;
    $.ajax({
        type:'POST',
        url:path + '/Api/User/sendOTP',   
        data:data,
        success:function(res){ 
          if(res == 1){  
            $('#otp_s').html('<span class="text-success"> OTP Sent</span>');
            $('.sendOtp').hide();
            $('.otp_input').show(); 
            $('.verifyOtp').show();
          }
        }
    });
});

$('#verifyOTP').click(function(){ 
    var enable_disable = $(this).attr('data-2fa') ? 1 : 0;
    var data = {
        'otp' : $('#otp-pin').val(),
        'enable_disable' : enable_disable
    };
     
    console.log(data); 
    let path = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port;
    $.ajax({
        type:'POST',
        url:path + '/Api/User/verifyOTP',    
        data:data,
        success:function(res){
          console.log(res);

          if(enable_disable == 1)
          {
             if(res == 1){
               $('#formOtp').hide();   
               $('#otp_success') 
               .html('<div class="alert alert-success"><strong>Thank You!</strong><br>Your 2FA Mobile disabled successfully!</div>');
             }else{
               $('#otp_error') 
               .html('<div class="alert alert-danger">Wrong OTP!<br>Please enter your correct recent OTP!</div>');
             }
          }else{
             if(res == 1){
               $('#formOtp').hide();   
               $('#otp_success') 
               .html('<div class="alert alert-success"><strong>Thank You!</strong><br>Your OTP has been verified successfully!</div>');
             }else{
               $('#otp_error') 
               .html('<div class="alert alert-danger">Wrong OTP!<br>Please enter your correct recent OTP!</div>');
             }
          }
         
        }
    });
});



});

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  var user = getCookie("username");
  if (user != "") {
    alert("Welcome again " + user);
  } else {
    user = prompt("Please enter your name:", "");
    if (user != "" && user != null) {
      setCookie("username", user, 365);
    }
  }
}


function tokensSaleGraph(x)
 {
     var x = x ? x : 7;
     // Line Chart
    let path = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port;

    var object = {
        period : x
    };
    $.post(path + '/Api/token/tokensSaleGraph',object,function(data,status){
    var data = JSON.parse(data);
    var labels = data.labels;
    var tokendata  = data.tokendata;

    var lineChart = 'tknSale';
    if ($('#'+lineChart).length > 0) {
        var lineCh = document.getElementById(lineChart).getContext("2d");

        var chart = new Chart(lineCh, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: labels,
                datasets: [{
                    label: "",
                    tension:0.4,
                    backgroundColor: 'transparent',
                    borderColor: '#2c80ff',
                    pointBorderColor: "#2c80ff",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 2,
                    pointHoverRadius: 6,
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "#2c80ff",
                    pointHoverBorderWidth: 2,
                    pointRadius: 6,
                    pointHitRadius: 6,
                    data: tokendata,
                }]
            },

            // Configuration options go here
            options: {
                legend: {
                    display: false
                },
                maintainAspectRatio: false,
                tooltips: {
                    callbacks: {
                        title: function(tooltipItem, data) {
                            return 'Date : ' + data['labels'][tooltipItem[0]['index']];
                        },
                        label: function(tooltipItem, data) {
                            return data['datasets'][0]['data'][tooltipItem['index']] + ' Tokens' ;
                        }
                    },
                    backgroundColor: '#eff6ff',
                    titleFontSize: 13,
                    titleFontColor: '#6783b8',
                    titleMarginBottom:10,
                    bodyFontColor: '#9eaecf',
                    bodyFontSize: 14,
                    bodySpacing:4,
                    yPadding: 15,
                    xPadding: 15,
                    footerMarginTop: 5,
                    displayColors: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true,
                            fontSize:12,
                            fontColor:'#9eaecf',

                        },
                        gridLines: {
                            color: "#e5ecf8",
                            tickMarkLength:0,
                            zeroLineColor: '#e5ecf8'
                        },

                    }],
                    xAxes: [{
                        ticks: {
                            fontSize:12,
                            fontColor:'#9eaecf',
                            source: 'auto',
                        },
                        gridLines: {
                            color: "transparent",
                            tickMarkLength:20,
                            zeroLineColor: '#e5ecf8',
                        },
                    }]
                }
            }
        });
    }

    });

 }
 tokensSaleGraph(null);
