<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>favicon.ico">
    <title>Faucet CMS</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flipclock.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">

   
    <!--[if lt IE 9]><script src="<?php echo base_url();?>assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src='https://www.google.com/recaptcha/api.js'></script>

  <style>
    <?php echo $styles; ?>
    .geetest_holder{
      margin: 0 auto;
    }
  </style>
  <?php echo $js_before_head_close; ?>
  </head>
  <?php echo $js_before_body; ?>
  <body>
    <?php echo $js_after_body; ?>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo base_url();?>"><b style="color: #fff;">Faucet CMS </b><img src="<?php echo base_url();?>assets/img/logo.png" style="height: 50px; margin: 0 0 5px 0;"/></a>
        </div>
	<?php ($instant_payment<1&&$logged_in||($this->uri->segment(1)=='mining')||(isset($balance)&&$balance>0)) ? require_once('withdraw-box.php'): '';?>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <?php echo $top_menu; ?>
          </ul>
        </div>
      </div>
    </div>