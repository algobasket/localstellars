"use strict";
/*
====================== components =======================     
    1.Timer
    2.Smooth scroll
    3.Background-paralax
    4.Header sticky
    5.Mail function
    6.Loader JS
    7.Gear box JS
    8.Particle Js
*/
/*-------------------------- 1.Timer --------------------------*/
setInterval(function() {
    makeTimer();
}, 1000);

function makeTimer() {
    var endTime = new Date("September 31, 2019 18:00:00 PDT"); // Change timer date form here...!        
    var endTime = (Date.parse(endTime)) / 1000;
    var now = new Date();
    var now = (Date.parse(now) / 1000);
    var timeLeft = endTime - now;
    var days = Math.floor(timeLeft / 86400);
    var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
    var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
    var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
    if (days < "10") {
        days = "0" + days;
    }
    if (hours < "10") {
        hours = "0" + hours;
    }
    if (minutes < "10") {
        minutes = "0" + minutes;
    }
    if (seconds < "10") {
        seconds = "0" + seconds;
    }
    $(".days").html(days + "<span>Days</span>");
    $(".hours").html(hours + "<span>Hours</span>");
    $(".minutes").html(minutes + "<span>Minutes</span>");
    $(".seconds").html(seconds + "<span>Seconds</span>");
}
var NavBar = $('.navbar ');
/*---------Timer-end-----------*/

/*------------------------------------- 2.Smooth scroll --------------------------------*/
// redirect-btn - this class for smooth scroll of other button instead of header menu ..! 
$(document).ready(function() {
    $('.redirect-btn, .navbar a, .links a').on('click', function(event) {
        event.preventDefault();
        var target = $(this.hash);
        if ($(window).width() < 992) {
            $('body,html').animate({
                'scrollTop': target.offset().top - 68
            }, 400);
        } else {
            $('body,html').animate({
                'scrollTop': target.offset().top - 55
            }, 400);
        }
        $('.navbar-collapse').removeClass('in');
        $('.navbar-toggle').addClass('collapsed');
    });
    /*-------- Smooth scroll-end -----------*/

    /*----------------------------- 3.Background-parallax ---------------------------*/
    /*$(window).scroll(function(e) {
        parallax();
    });

    function parallax() {
        var scrolled = $(window).scrollTop();
        $('.parallax').css('background-position-y', -(scrolled * 0.2) + 'px');
    }*/ /*--------- Background-paralax-end ----------*/

    /*------------------------------- 4.Header sticky -------------------------*/
    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var navbarHeight = NavBar.outerHeight();
    $(document).ready(function(event) {
        didScroll = true;
    });
    $(window).scroll(function(event) {
        didScroll = true;
    });
    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 100);

    function hasScrolled() {
        var st = $(document).scrollTop();
        if (st + $(window).height() < $(document).height()) {
            NavBar.addClass('sticky-header');
            if (st == 0) {
                NavBar.removeClass('sticky-header');
            }
        }
        lastScrollTop = st;
    }
});

/*------------ Hader sticky-end  -------*/

// Responsive menu js
$(document).ready(function(){
    var topSpace = $('.site-header').height() -2;
  });
  var siteToggle = $('.navbar-toggler'),
      layer=$('.site__layer'),
      siteMenu= $('.navbar-collapse');
  siteToggle.on('click', function(){
    layer.toggleClass('active');
    $('body').toggleClass('overflow-hidden');
  });
  
  $('.site__layer, #navbarCollapse a').on('click', function(){
    layer.removeClass('active');
    siteToggle.addClass('collapsed');
    siteMenu.removeClass('show');
    $('body').removeClass('overflow-hidden');

  });
  

/*--------------------------------- 5.Mail Fucntion -------------------------------*/
$(function() {
    var form = $('#ajax-contact');
    var formMessages = $('#form-messages');
    $(form).submit(function(e) {
        e.preventDefault();
        var formData = $(form).serialize();
        $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
            .done(function(response) {
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');
                $(formMessages).text(response);
               
            })
            .fail(function(data) {
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! An error occured and your message could not be sent.'); /*--------- Contact submission erroe Message ---------------*/
                }
            });
             setTimeout(function(){ $(formMessages).fadeOut(300); }, 3000);
    });

    var form1 = $('#subscribe_now');
    var mailMessages = $('#mail-messages');
    $(form1).submit(function(e) {
        e.preventDefault();
        var formData = $(form1).serialize();
        $.ajax({
                type: 'POST',
                url: $(form1).attr('action'),
                data: formData
            })
            .done(function(response) {
                $(mailMessages).removeClass('error');
                $(mailMessages).addClass('success');
                $(mailMessages).text(response);
                
            })
            .fail(function(data) {
                $(mailMessages).removeClass('success');
                $(mailMessages).addClass('error');
                if (data.responseText !== '') {
                    $(mailMessages).text(data.responseText);
                } else {
                    $(mailMessages).text('Oops! An error occured and your message could not be sent.'); /*--------- Contact submission erroe Message ---------------*/
                }
            });
             setTimeout(function(){ $(mailMessages).fadeOut(300); }, 3000);
    });
});

/* -------------- Mail function-end ----------*/
$(document).ready(function($) {
    /*----------------------- 6.Loader JS -------------------*/
    $('.site-loader').fadeOut(600)

/*----------------------- 7.gear box JS --------------------*/
$('#Color_list li').on('click', function(){
  var themeColor=$(this).attr('title');
  $('#dynamic-style').attr('href', 'css/'+themeColor+'.css');
});
});
/*----------------------- 8.Particles JS --------------------*/
particlesJS("particles-js", {"particles":{"number":{"value":50,"density":{"enable":true,"value_area":1000}},"color":{"value":"#4e68f0"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});



