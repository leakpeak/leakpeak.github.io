        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Captcha settings </h3><i class="fa fa-info-circle" title="Note, enable ONLY ONE captcha." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
            </div>
            <div class="box-body">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">reCAPTCHA</h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <div class="checkbox">
                      <i class="fa fa-info-circle" title="Enable this to use reCAPTCHA" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                      <label>
                        <input type="checkbox" <?php if($recaptcha_enabled!='0'){echo "checked=checked"; }?> name="recaptcha_enabled"> Enabled
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>reCAPTCHA public api key </label>
                    <i class="fa fa-info-circle" title="Public API key provided by reCAPTCHA." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="e.g. b1ce2ca3456ae78900b8765e43c21ca" name="recaptcha_api_public_key" value="<?php echo $recaptcha_api_public_key; ?>" size="50" />
                  </div>
                  <div class="form-group">
                    <label>reCAPTCHA secret api key </label>
                    <i class="fa fa-info-circle" title="Secret API key provided by reCAPTCHA." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="e.g. b1ce2ca3456ae78900b8765e43c21ca" name="recaptcha_api_private_key" value="<?php echo $recaptcha_api_private_key; ?>" size="50" />
                  </div>
                </div>
              </div>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">BitCaptcha</h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <div class="checkbox">
                      <i class="fa fa-info-circle" title="Enable this to use reCAPTCHA" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                      <label>
                        <input type="checkbox" <?php if($bitcaptcha_enabled!='0'){echo "checked=checked"; }?> name="bitcaptcha_enabled"> Enabled
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>BitCaptcha ID</label>
                    <i class="fa fa-info-circle" title="ID key provided by BitCaptcha." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="e.g. b1ce2ca3456ae78900b8765e43c21ca" name="bitcaptcha_api_public_key" value="<?php echo $bitcaptcha_api_public_key; ?>" size="50" />
                  </div>
                  <div class="form-group">
                    <label>BitCaptcha secret api key </label>
                    <i class="fa fa-info-circle" title="Secret API key provided by BitCaptcha." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="e.g. b1ce2ca3456ae78900b8765e43c21ca" name="bitcaptcha_api_private_key" value="<?php echo $bitcaptcha_api_private_key; ?>" size="50" />
                  </div>
                </div>
              </div>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Solve Media</h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <div class="checkbox">
                      <i class="fa fa-info-circle" title="Enable this to use SolveMedia" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                      <label>
                        <input type="checkbox" <?php if($solvemedia_enabled!='0'){echo "checked=checked"; }?> name="solvemedia_enabled"> Enabled
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Solve Media Challenge Key (C-key) </label>
                    <i class="fa fa-info-circle" title="Public API key provided by Solve Media." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="e.g. aFBNRertyujpbxbJebDkYXBPRWAmTtrg" name="solvemedia_api_public_key" value="<?php echo $solvemedia_api_public_key; ?>" size="50" />
                  </div>
                  <div class="form-group">
                    <label>Verification Key (V-key) </label>
                    <i class="fa fa-info-circle" title="Secret API key provided by Solve Media." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="e.g. b1ce2ca3456ae78900b8765e43c21ca" name="solvemedia_api_private_key" value="<?php echo $solvemedia_api_private_key; ?>" size="50" />
                  </div>
                  <div class="form-group">
                    <label>Authentication Hash Key (H-key) </label>
                    <i class="fa fa-info-circle" title="Secret API key provided by Solve Media." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="e.g. dM0LO-QJYUUM1abLcdefghjRz2e0HBJm" name="solvemedia_api_hash_key" value="<?php echo $solvemedia_api_hash_key; ?>" size="50" />
                  </div>
                </div>
              </div>
            </div>
          </div>