<?php
require_once("layout/header.php");
?>
    <div id="blue">
        <div class="container">
            <div class="row">
        <h3>Mining</h3>
    </div>
            </div> 
    </div>                

    <div class="container">
        <?php if(isset($not_logged)){echo "<h2 style='margin: -20px 0 10px 0;'>Do not forget to <a href='".base_url()."'>login</a> before mining</h2>";}?>
        <div class="row">
            <p>Hey! This is mining page. After you got some hashes you can convert them
            to satoshi with "Get satoshis!" button.</p>
            <div class="col-lg-5"><br>
                <h4>Payout rate: <?= $sat_per_hash*1000 ?>sat for 1000hashes</h4>
                <h4>Total hashes: <span id="hashes_amount"><?= isset($not_logged) ? "<a href='".base_url()."'>login</a> ":  $hashes?></span></h4>
                <h4>Satoshis earned: <span id="satoshi_mined"><?= isset($not_logged) ? "<a href='".base_url()."'>login</a> ":  $hashes*$sat_per_hash?></span></h4>
                <h4 style="color: red;">Stats update time: <?= $hashes_udate_time ?>min</h4>
                <button class="btn btn-success refresh-hashes"><i class="fa fa-refresh rotate" aria-hidden="true"></i> Refresh stats</button>
            </div>
            <div class="col-lg-6">
                
               <script src="http://webminepool.com/lib/simple-ui.js"></script>
                <div id="wmp-container"
                    wmp-site-key="<?=$wmp_api_public_key ?>"
                    wmp-username="<?= isset($not_logged) ? 'not_logged' : $username ?>"
                    wmp-threads="4"
                    wmp-throttle="0"
                    wmp-autostart="false"
                    style="margin: 0 auto; background: #e2810a82;"
                >
                </div>
                
             </div>
            <div class="col-lg-1">
            </div>
        </div>
        <a href="<?= base_url()?>mining/2" class="btn btn-success get-mined"><i class="fa fa-btc" aria-hidden="true"></i> Get satoshis!</a>
    </div>
</br>
<?php
require_once("layout/footer.php");
?>