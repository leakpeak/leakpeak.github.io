<?php
$this->load->helper('solvemedialib');
$this->load->helper('bitcaptcha');
    if ($recaptcha_enabled){
        echo '
            <div class="g-recaptcha" data-sitekey="'.$recaptcha_api_public_key.'"></div>
        ';
    }
    if ($solvemedia_enabled){
        echo '<div class="g-recaptcha">
            '.solvemedia_get_html($solvemedia_api_public_key).'
            </div>
        ';
    }
    if ($bitcaptcha_enabled){
        echo '<div id="SQNView" style="width: 290px; margin: 0 auto;">
                <div id="SQNContainer" sqn-height="40">
                    <div id="SQN-load-bg"></div>
                    <div class="SQN-init">
                        <a href="https://www.shenqiniao.com/" target="_blank"><img src="//static.shenqiniao.net/loading.gif"/></a>
                        <span class="vaptcha-text">Load...</span>
                    </div>
                </div>
                <a class="SQN-tips" href="http://bitcaptcha.io/help.html" title="Help" target="_blank"><img src="//static.shenqiniao.net/t.png"/></a>
            </div>
            <script src="//static.shenqiniao.net/sqn.js?id='.$bitcaptcha_api_public_key.'&btn=&lng=en" type="text/javascript"></script>
            ';
    }
?>
