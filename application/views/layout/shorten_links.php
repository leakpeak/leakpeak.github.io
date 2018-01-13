<div style='font-size: 24px;'>
<?php
    if($shorten_links==1){
        if($shorten_links_api_key!=''&&!isset($_COOKIE['code1'])){
            echo "
		<a href='".base_url()."claim/link?service=1'><b>Visit link</b></a> and press 'skip ads' to get $shorten_links_bonus extra satoshi for a claim!
	    ";
	}
	if($pro_links_api_key!=''&&!isset($_COOKIE['code2'])){
            echo "
		<a href='".base_url()."claim/link?service=2'><b>Visit link</b></a> and press 'skip ads' to get $shorten_links_bonus extra satoshi for a claim!
	    ";
        }
        if($mellow_links_api_key!=''&&!isset($_COOKIE['code3'])){
            echo "
		<a href='".base_url()."claim/link?service=3'><b>Visit link</b></a> and press 'skip ads' to get $shorten_links_bonus extra satoshi for a claim!
            ";
        }
    }
    ?>
</div>