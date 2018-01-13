<div class="withdraw-box" style="">Balance: <?php
        if (isset($balance)){
            echo '<b>'.$balance.'</b> satoshi';
            $more = $withdraw_limit-$balance;
            echo $balance>$withdraw_limit||$balance>$threshold ? '  <a href="'.base_url().'claim/withdraw/">withdraw</a>' : '. Get '.$more.' more to get a withdraw.' ;
        }
        ?></div>