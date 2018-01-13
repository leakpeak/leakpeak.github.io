<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Payment gateways </h3><i class="fa fa-info-circle" title="Note, that you need et least one payment system enabled." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
            </div>
            <div class="box-body">
              <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">FaucetHUB</h3>
                  </div>
                <div class="box-body">
                  <div class="form-group">
                    <div class="checkbox">
                      <i class="fa fa-info-circle" title="Enable to make FaucetHub payments possible." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                      <label>
                        <input type="checkbox" <?php if($faucethub_enabled!='0'){echo "checked=checked"; }?> name="faucethub_enabled"> Enabled
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>FaucetHUB API key </label>
                    <i class="fa fa-info-circle" title="API key provided by FaucetHUB for making payments." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="e.g. b1ce2ca3456ae78900b8765e43c21ca" name="faucethub_api_key" value="<?php echo $faucethub_api_key; ?>" size="50" />
                  </div>
                </div>
              </div>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">EPay</h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <div class="checkbox">
                      <i class="fa fa-info-circle" title="Enable to make EPay payments possible." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                      <label>
                        <input type="checkbox" <?php if($epay_enabled!='0'){echo "checked=checked"; }?> name="epay_enabled"> Enabled
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>EPay API key </label>
                    <i class="fa fa-info-circle" title="API key provided by EPay for making payments." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="e.g. b1ce2ca3456ae78900b8765e43c21ca" name="epay_api_key" value="<?php echo $epay_api_key; ?>" size="50" />
                  </div>
                </div>
              </div>
              <div class="box-body">
              <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">FaucetSystem</h3>
                  </div>
                <div class="box-body">
                  <div class="form-group">
                    <div class="checkbox">
                      <i class="fa fa-info-circle" title="Enable to make FaucetSystem payments possible." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                      <label>
                        <input type="checkbox" <?php if($faucetsystem_enabled!='0'){echo "checked=checked"; }?> name="faucetsystem_enabled"> Enabled
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>FaucetSystem API key </label>
                    <i class="fa fa-info-circle" title="API key provided by FaucetSystem for making payments." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="e.g. abcd1234567899c1aa2f345123b3456e7cdfa09c3822a1bcd680e2fg123h4j5" name="faucetsystem_api_key" value="<?php echo $faucetsystem_api_key; ?>" size="50" />
                  </div>
                </div>
              </div>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">XAPO (coming soon)</h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <div class="checkbox">
                      <i class="fa fa-info-circle" title="Enable to make XAPO payments possible." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                      <label>
                        <input type="checkbox" disabled <?php if($xapo_enabled!='0'){echo "checked=checked"; }?> name="xapo_enabled"> Enabled
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>XAPO API key </label>
                    <i class="fa fa-info-circle" title="API key provided by XAPO for making payments." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input disabled type="text" class="form-control" placeholder="e.g. b1ce2ca3456ae78900b8765e43c21ca" name="xapo_api_key" value="<?php echo $xapo_api_key; ?>" size="50" />
                  </div>
                </div>
              </div>
            </div>
          </div>