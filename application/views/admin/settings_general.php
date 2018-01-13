        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">General</h3>
              </div>
            <div class="box-body">
              <div class="form-group">
                <label>Claim time </label>
                <i class="fa fa-info-circle" title="Time interval between claims (in minutes)." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                <input type="number" class="form-control" name="claim_time" value="<?php echo $claim_time; ?>" size="50" />
              </div>
              <div class="form-group">
                <label>Instant payment </label>
                <i class="fa fa-info-circle"title="Use 1 for direct payments after every claim, or 0 to use a withdraw limit." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                <input type="number" class="form-control"  name="instant_payment" value="<?php echo $instant_payment; ?>" size="50" />
              </div>
              <div class="form-group">
                <label>Withdraw limit </label>
                <i class="fa fa-info-circle" title="Limit to withdraw (in satoshi)." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                <input type="number" class="form-control"  name="withdraw_limit" value="<?php echo $withdraw_limit; ?>" size="50" />
              </div>
              <div class="form-group">
                <label>Min reward </label>
                <i class="fa fa-info-circle" title="Minimal reward (in satoshi). Note: if you want to use static reward use the same value for max reward. " data-toggle="tooltip"  data-placement="left"  aria-hidden="true"></i>
                <input type="number" class="form-control"  name="min_reward" value="<?php echo $min_reward; ?>" size="50" />
              </div>
              <div class="form-group">
                <label>Max reward </label>
                <i class="fa fa-info-circle" title="Maximum reward (in satoshi). Note: if you want to use static reward use the same value for min reward." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                <input type="number" class="form-control"  name="max_reward" value="<?php echo $max_reward; ?>" size="50" />
              </div>
            </div>
          </div>