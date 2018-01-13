<div class="form-group" id="payment_system_select" style="text-align: left;">
<label>Select microwallet:</label>
<?php
if($faucethub_enabled){
    echo '
    <div class="radio">
        <label>
            <input type="radio" name="withdraw_sys" value="1" checked="">
            <img style ="height:25px;" src="'.base_url().'assets/img/fh_logo.png" alt="FaucetHUB">
        </label>
    </div>
    ';
}
if($epay_enabled){
    echo '
    <div class="radio">
        <label>
            <input type="radio" name="withdraw_sys" value="2" checked="">
            <img style="height:25px;" src="'.base_url().'assets/img/epay_logo.png" alt="EPay">
        </label>
    </div>
    ';
}
if($faucetsystem_enabled){
    echo '
    <div class="radio">
        <label>
            <input type="radio" name="withdraw_sys" value="3" checked="">
            <img style ="height:25px;" src="'.base_url().'assets/img/fs_logo.jpg" alt="FaucetHUB"><span style="color: white;">FaucetSystem</span>
        </label>
    </div>
    ';
}

?>
</div>