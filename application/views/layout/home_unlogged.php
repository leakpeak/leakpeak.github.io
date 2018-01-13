<form method="POST" id="login-form" action="<?php echo base_url();?>/auth/enter_faucet">
    <div class="signup-box">
	<div class="row ">
	    <div class="col-md-3">
		<img src='assets/img/samples/160x200.jpg'>
	    </div>
	    <div class="col-md-6">
		<?php require_once('payment_system.php');?>
		<?php require_once('captcha.php');?>
		<button class="btn btn-success" id="bitbtn">Submit</button>
	    </div>
	    <div class="col-md-3">
		<img src='assets/img/samples/160x200.jpg'>
	    </div>
	    <br>
	</div>
    </div>
    <?php require_once('messages.php');?>
    <div class="row">
	<div class="col-md-1"></div>
	    <div class="col-md-10">
		<div class="form-group">
		    <input type="text" class="form-control" id="bitcoin_address" placeholder="Enter your Bitcoin address" name="btc_address">
		    <input type='hidden' name="password" value=''>
		    <input type='hidden' name="referal" value='<?php echo isset($_GET['r']) ? $_GET['r'] : '';?>'>
		    <input type='hidden' name="email" value=''>
		    <input type='hidden' name="login_page" value=1>
		</div>
	    </div>
	<div class="col-md-1"></div>
    </div>
    <a class='btn btn-lg btn-success enter-faucet-btn'>ENTER FAUCET</a>
</form>