<div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <?php $this->load->view('common/backend-sidebar');?>
                <div class="col-lg-9 main-content">
                   <div class="card content-area">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Token Inventory</h4>
                            </div>
                            <div class="card-text">
                                <p> Manage overall token inventory from this section</p>
                            </div>
                            <div class="gaps-1-5x"></div>
                            <script src="https://code.highcharts.com/highcharts.js"></script>
                            <script src="https://code.highcharts.com/modules/exporting.js"></script>
                            <script src="https://code.highcharts.com/modules/export-data.js"></script>

                            <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

                           <div class="card-head">
                                <h4 class="card-title">TOTAL CIRCULATING SUPPLY - <?php echo $token_info['total_circulating_supply'];?></h4>
                            </div>
                           
                            <hr>
                           <div class="card-head">
                            <h4 class="card-title">VOLUME TOKEN - <?php echo $token_info['volume_token'];?></h4>
                            </div>

                            <hr>
                            <div class="card-head">
                                <h4 class="card-title">REMAINING TOKEN - <?php echo $token_info['remaining_token'];?></h4>
                            </div>
                          
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                </div>    
            </div>
        </div><!-- .container -->
</div><!-- .page-content -->

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<script type="text/javascript">
    // Build the chart
Highcharts.chart('container', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: '<h2>Token Stat</h2>'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: false
      },
      showInLegend: true
    }
  },
  series: [{
    name: 'Brands',
    colorByPoint: true,
    data: [{
      name: 'XXA',
      y: 61.41,
      sliced: true,
      selected: true
    }, {
      name: 'BTC',
      y: 11.84
    }, {
      name: 'LTC',
      y: 10.85
    }, {
      name: 'ETH',
      y: 4.67
    }, {
      name: 'XLM',
      y: 4.18
    }]
  }]
});
</script>                