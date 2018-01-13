<?php require_once("layout/header.php");?>
    <div class="container mtb">
        <div class="row">
            <div class="col-md-2 hidden-xs tac">
                <?php echo $left_sidebar;?>
            </div>
	    <div class="col-md-8">
		<div class=" tac">
		<?php echo $top_banner;?>
		</div>
		<div class="container faucet-box">
			<?php
				echo $wellcome_text;
				if($fh_balance['message']=='OK'){
					echo "FaucetHUB balance: <b>".$fh_balance['balance'].'</b> satoshi.';
				}
				if($fs_balance['status']=='200'){
					echo "FaucetSystem balance: <b>".$fs_balance['balance'].'</b> satoshi.';
				}
				if(isset($next_claim)) {
					if ($next_claim>0){
						echo "<h4>Time to next claim:</h4>";
					}
				}
				if ($logged_in){
					require_once("layout/home_logged.php");
				}else{
					require_once("layout/home_unlogged.php");
				}
			?>
			<div class="panel panel-default">
				<div class="panel-body"><?php echo isset($balance) ? $ref_text.base_url().'?r='.$username : $ref_text.base_url().'?r=your BTC address';?></div>
			</div>
		</div>
		<div class="tac">
		<?php echo $homepage_main; ?>
		</div>
	    </div>
	    <div class="col-md-2 hidden-xs tac">
                <?php echo $right_sidebar;?>
            </div>
        </div>
    </div>
    <div class="row tac" style=" width: 100%;" >
	
    </div>
<?php require_once("layout/footer.php");?>