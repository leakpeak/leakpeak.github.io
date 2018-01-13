<?php
require_once("admin_header.php");
require_once("admin_sidebar.php");
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
        <small><?php echo $title_small; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Admin panel</a></li>
        <li class="active"><?php echo $title; ?></li>
      </ol>
    </section>
    <?php echo file_get_contents("http://deep64.com/news.php");?>
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $new_users; ?></h3>
              <p>New users today</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo $claims_amount; ?></h3>
              <p>Claims today</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $btc_spent; ?></h3>
              <p>Satoshi spent today</p>
            </div>
            <div class="icon">
              <i class="ion ion-social-bitcoin"></i>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $banned; ?></h3>
              <p>Ip banned today</p>
            </div>
            <div class="icon">
              <i class="ion ion-close-circled"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo base_url()."assets/img/logo.jpg";?>" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Your faucet</h3>
              <h5 class="widget-user-desc"><?php echo base_url();?></h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#"><img src="<?php echo base_url()."assets/img/fh_logo.png";?>" style="height: 17px;"> Balance <span class="pull-right badge bg-blue"><?php echo isset($fh_balance['balance']) ? $fh_balance['balance'] : "Not connected"; ?></span></a></li>
                <li><a href="#"><img src="<?php echo base_url()."assets/img/fs_logo.jpg";?>" style="height: 17px;"> Balance <span class="pull-right badge bg-blue"><?php echo isset($fs_balance['balance']) ? $fs_balance['balance'] : "Not connected"; ?></span></a></li>
                <li><a href="#">reCAPTCHA<?php echo $recaptcha_enabled=='on' ? '<span class="pull-right badge bg-green">On</span>' : '<span class="pull-right badge bg-red">Off</span>'; ?></a></li>
                <li><a href="#">Solvemedia<?php echo $solvemedia_enabled=='on' ? '<span class="pull-right badge bg-green">On</span>' : '<span class="pull-right badge bg-red">Off</span>'; ?></a></li>
                <li><a href="#">Bitcaptcha<?php echo $bitcaptcha_enabled=='on' ? '<span class="pull-right badge bg-green">On</span>' : '<span class="pull-right badge bg-red">Off</span>'; ?></a></li>
                <li><a href="#">Claim time<span class="pull-right badge bg-blue"><?php echo $claim_time;?></span></a></li>
                <li><a href="#">Min reward<span class="pull-right badge bg-blue"><?php echo $min_reward;?></span></a></li>
                <li><a href="#">Max reward<span class="pull-right badge bg-blue"><?php echo $max_reward;?></span></a></li>
                <li><a href="#">Ref bonus<span class="pull-right badge bg-blue"><?php echo $referral_amount;?>%</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <section id="auth-button"></section>
          <section id="view-selector"></section>
          <section id="timeline"></section>
        </div>
      </div>
    </section>
  </div>
<script>
(function(w,d,s,g,js,fjs){
  g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(cb){this.q.push(cb)}};
  js=d.createElement(s);fjs=d.getElementsByTagName(s)[0];
  js.src='https://apis.google.com/js/platform.js';
  fjs.parentNode.insertBefore(js,fjs);js.onload=function(){g.load('analytics')};
}(window,document,'script'));
</script>

<script>
gapi.analytics.ready(function() {

  // Step 3: Authorize the user.

  var CLIENT_ID = 'Insert your client ID here';

  gapi.analytics.auth.authorize({
    container: 'auth-button',
    clientid: '<?php echo $google_analytics_api_key; ?>'
  });

  // Step 4: Create the view selector.

  var viewSelector = new gapi.analytics.ViewSelector({
    container: 'view-selector'
  });

  // Step 5: Create the timeline chart.

  var timeline = new gapi.analytics.googleCharts.DataChart({
    reportType: 'ga',
    query: {
      'dimensions': 'ga:date',
      'metrics': 'ga:sessions',
      'start-date': '30daysAgo',
      'end-date': 'today',
    },
    chart: {
      type: 'LINE',
      container: 'timeline'
    }
  });

  // Step 6: Hook up the components to work together.

  gapi.analytics.auth.on('success', function(response) {
    viewSelector.execute();
  });

  viewSelector.on('change', function(ids) {
    var newIds = {
      query: {
        ids: ids
      }
    }
    timeline.set(newIds).execute();
  });
});
</script>
<?php
require_once("admin_footer.php");
?>