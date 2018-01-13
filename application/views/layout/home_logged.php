<form method="POST" action="<?php if ($next_claim>0){echo base_url();}else{echo base_url()."claim/claim";}?>">
    <?php require_once('messages.php');?>
    <div class="row">
	<div class="col-md-1"></div>
	    <div class="col-md-10">
		<div class="form-group">
			
		</div>
	    </div>
	<div class="col-md-1"></div>
    </div>
    <div class="row">
	<div class="col-md-2"></div>
	    <div class="col-md-8">
		<?php if ($next_claim>0){
			echo "<div class='clock'></div>";
			if($mining_enabled){
			    echo $mining_text;
			}
		    }else{
			require_once('captcha.php');
			require_once('shorten_links.php');
		    }
		?>
	    </div>
	<div class="col-md-2"></div>
    </div>
    
    <input type="hidden" value="<?php echo $code1;?>" name="code1">
    <input type="hidden" value="<?php echo $code2;?>" name="code2">
    <input type="hidden" value="<?php echo $code3;?>" name="code3">
    <button class='btn btn-lg btn-success enter-faucet-btn' style="width:65%;" <?php if ($next_claim>0){echo 'disabled >Please wait a bit<';}else{echo '>Claim<';}?>/button>
    
   

</form>