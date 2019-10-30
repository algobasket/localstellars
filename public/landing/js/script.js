(function($) {
  'use strict';
      /*======================= 
        01. Wow Active 
      ======================*/
      new WOW().init();

      /*======================= 
        02. Timer
      ======================*/
      $('#clock').countdown('2019/09/31', function(event) {
        var $this = $(this).html(event.strftime(''
          + '<ul>'
          + '<li><span>%D<em>days</em></span></li>'
          + '<li><span>%H<em>hours </em></span></li>'
          + '<li><span>%M<em>minutes</em></span></li>'
          + '<li><span>%S<em>seconds</em></span></li>'
          + '</ul>'
          ));
      });

      /*======================= 
        03. Brand Logo Carousel Slider
      ======================*/
      $('.brand-logos').owlCarousel({
          loop:true,
          autoplay:true,
          autoplayTimeout:4500,
          margin:10,
          nav: false,
          dots: false,
          responsiveClass:true,
          responsive:{
              0:{
                  items:1            },
              600:{
                  items:3
              },
              1000:{
                  items:4
              }
          }
      });
      /*======================= 
        04. Roadmap Slider Carousel Slider
      ======================*/
      $('.roadmap-slider').owlCarousel({
          loop:true,
          autoplay:true,
          autoplayTimeout:6000,
          margin:0,
          nav: false,
          dot: true,
          responsiveClass:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              },
              1000:{
                  items:4
              },
              1350:{
                  items:5
              }
          }
      });
      /*===============================
        05. Blog Slider Carousel Slider
      ==================================*/
      $('.blog-slider').owlCarousel({
          loop:true,
          autoplay:true,
          autoplayTimeout:6000,
          margin:0,
          nav: false,
          dot: true,
          responsiveClass:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:2
              },
              1350:{
                  items:3
              }
          }
      });
      /*===============================
        06. Expert Slider Carousel Slider
      ==================================*/
      $('.expert-slider').owlCarousel({
          loop:true,
          autoplay:true,
          autoplayTimeout:6000,
          margin:0,
          nav: true,
          dot: false,
          animateOut: 'fadeOut',
          animateIn: 'fadeIn',
          responsiveClass:true,

          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1
              },
              1350:{
                  items:1
              }
          }
      });
      /*===============================
        07. Mobile Menu
      ==================================*/
      if($(window).width() < 767){
        jQuery('.menu-icon').on("click", function() {
          jQuery(this).toggleClass('active');
          jQuery('nav').slideToggle();
          jQuery('nav ul li a').on("click", function(){
            jQuery('.menu-icon').removeClass('active');
            jQuery('nav').hide();
          });
        });
      }
      /*===============================
        08. Chart function
      ==================================*/    
      chart();

    function chart(){
      /* Layout 1 Token Chat */
      var colors = ['#7d7d7d', '#d47c0c', '#f0931e', '#f6aa35', '#fbbd18'];
      var labels = ["«Bounty»  campaign", "Advisors", "Founders and Team", "Reserved Funding", "Distributed to Community"];
      var data = [10, 10, 5, 5, 70];
      var bgColor = colors;
      var dataChart = {
        labels: labels,
        datasets: [{
          data: data,
          backgroundColor: bgColor,
          borderWidth: 0
        }]
      };
      var config = {
        type: 'doughnut',
        data: dataChart,
        options: {
          maintainAspectRatio: false,
          cutoutPercentage: 40,
          legend: {
            display: false
          },
          legendCallback: function(chart) {
            var text = [];
            text.push('<ul class="doughnut-legend">');
            if (chart.data.datasets.length) {
              for (var i = 0; i < chart.data.datasets[0].data.length; ++i) {
                text.push('<li><span class="doughnut-legend-icon" style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '"></span>');
                if (chart.data.labels[i]) {
                  text.push('<span class="doughnut-legend-text">' + chart.data.labels[i] + '</span>');
                }
                text.push('</li>');
              }
            }
            text.push('</ul>');
            return text.join("");
          },
          tooltips: {
            yPadding: 10,
            callbacks: {
              label: function(tooltipItem, data) {
                var total = 0;
                data.datasets[tooltipItem.datasetIndex].data.forEach(function(element /*, index, array*/ ) {
                  total += element;
                });
                var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                var percentTxt = Math.round(value / total * 100);
                return data.labels[tooltipItem.index] + ': ' + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] + ' (' + percentTxt + '%)';
              }
            }
          }
        }
      };
      var ctx = document.getElementById("doughnutChart").getContext("2d");
      var doughnutChart = new Chart(ctx, config);

      var legend = doughnutChart.generateLegend();
      var legendHolder = document.getElementById("legend");
      legendHolder.innerHTML = legend;

       /* Layout 2 Token Chat */
      var layout2colors = ['#7d7d7d', '#d47c0c', '#f0931e', '#f6aa35', '#fbbd18'];
      var layout2labels = ["65% Crowdsale", "10% Team", "5% Advisors and Partners", "5% Beauty, Airdrop and Referrals", "15% Reserved for Agate Ecosystem"];
      var layout2data = [65, 10, 5, 5, 15];
      var layout2data2 = [10, 20, 30, 30, 20];
      var bgColor = layout2colors;

      var layout2dataChart = {
        labels: layout2labels,
        datasets: [{
          data: layout2data,
          backgroundColor: bgColor,
          borderWidth: 0
        }]
      };
      var layout2dataChart2 = {
        labels: layout2labels,
        datasets: [{
          data: layout2data2,
          backgroundColor: bgColor,
          borderWidth: 0
        }]
      };
      var layout2config1 = {
        type: 'doughnut',
        data: layout2dataChart,
        options: {
          maintainAspectRatio: false,
          cutoutPercentage: 40,
          legend: {
            display: false
          },
          legendCallback: function(chart) {
            var text = [];
            text.push('<ul class="doughnut-legend">');
            if (chart.data.datasets.length) {
              for (var i = 0; i < chart.data.datasets[0].data.length; ++i) {
                text.push('<li><span class="doughnut-legend-icon" style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '"></span>');
                if (chart.data.labels[i]) {
                  text.push('<span class="doughnut-legend-text">' + chart.data.labels[i] + '</span>');
                }
                text.push('</li>');
              }
            }
            text.push('</ul>');
            return text.join("");
          },
          tooltips: {
            yPadding: 10,
            callbacks: {
              label: function(tooltipItem, data) {
                var total = 0;
                data.datasets[tooltipItem.datasetIndex].data.forEach(function(element /*, index, array*/ ) {
                  total += element;
                });
                var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                var percentTxt = Math.round(value / total * 100);
                return data.labels[tooltipItem.index] + ': ' + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] + ' (' + percentTxt + '%)';
              }
            }
          }
        }
      };

      var layout2config2 = {
        type: 'doughnut',
        data: layout2dataChart2,
        options: {
          maintainAspectRatio: false,
          cutoutPercentage: 40,
          legend: {
            display: false
          },
          legendCallback: function(chart) {
            var text = [];
            text.push('<ul class="doughnut-legend">');
            if (chart.data.datasets.length) {
              for (var i = 0; i < chart.data.datasets[0].data.length; ++i) {
                text.push('<li><span class="doughnut-legend-icon" style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '"></span>');
                if (chart.data.labels[i]) {
                  text.push('<span class="doughnut-legend-text">' + chart.data.labels[i] + '</span>');
                }
                text.push('</li>');
              }
            }
            text.push('</ul>');
            return text.join("");
          },
          tooltips: {
            yPadding: 10,
            callbacks: {
              label: function(tooltipItem, data) {
                var total = 0;
                data.datasets[tooltipItem.datasetIndex].data.forEach(function(element /*, index, array*/ ) {
                  total += element;
                });
                var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                var percentTxt = Math.round(value / total * 100);
                return data.labels[tooltipItem.index] + ': ' + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] + ' (' + percentTxt + '%)';
              }
            }
          }
        }
      };

      if($('#layout2doughnutChart1').length > 0){
        var layout2ctx1 = document.getElementById("layout2doughnutChart1").getContext("2d");
        var layout2doughnutChart1 = new Chart(layout2ctx1, layout2config1);

        var layout2legend1 = layout2doughnutChart1.generateLegend();
        var layout2legendHolder1 = document.getElementById("layout2legend1");
        layout2legendHolder1.innerHTML = layout2legend1;
      }

      /*var layout2ctx2 = document.getElementById("layout2doughnutChart2").getContext("2d");
      var layout2doughnutChart2 = new Chart(layout2ctx2, layout2config2);

      var layout2legend2 = layout2doughnutChart2.generateLegend();
      var layout2legendHolder2 = document.getElementById("layout2legend2");
      layout2legendHolder2.innerHTML = layout2legend2;*/

   }
})(jQuery);