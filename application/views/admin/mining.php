<?php
require_once("admin_header.php");
require_once("admin_sidebar.php");
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
        <small><?php echo $title_small; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Admin panel</a></li>
        <li class="active"><?php echo $title; ?></li>
      </ol>
    </section>
    <section class="content settings">
      <span style="color: red;"></span>
      <div class="alert alert-error alert-dismissible"  <?php if (validation_errors()==''){echo "style='display: none'";} ?>>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <h4><i class="icon fa fa-check"></i> Error.</h4>
        <?php echo validation_errors(); ?>
      </div>
      <div class="alert alert-success alert-dismissible"  <?php  echo !isset($success) ? "style='display: none; color: green;'"  : "style='display: block; color: green;'";  ?>>
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          <h4><i class="icon fa fa-check"></i> Success.</h4>
          Mining options was successfully saved.
        </div>
      <?php echo form_open('admin/mining'); ?>
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">General</h3>
              </div>
            <div class="box-body">
              <div class="form-group">
                <label>Enable mining </label>
                <i class="fa fa-info-circle" title="1 to enable, 0 to disable" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                <input type="number" class="form-control" name="mining_enabled" value="<?php echo $mining_enabled; ?>" size="50"  >
              </div>
              <div class="form-group">
                <label>Satoshi per hash (paid to users) </label>
                <i class="fa fa-info-circle" title="Amount of satoshi paid for 1 hash." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                <input type="text" class="form-control" name="sat_per_hash" value="<?php echo $sat_per_hash; ?>" size="50"  >
              </div>
              <div class="form-group">
                <label>Hashes update time (mins)</label>
                <i class="fa fa-info-circle" title="Not less than 1 minute." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                <input type="number" class="form-control" name="hashes_udate_time" value="<?php echo $hashes_udate_time; ?>" size="50" >
              </div>
              <input type="hidden" name="instant_payment" value="<?php echo $instant_payment; ?>">
              <button class="btn btn-success">Save</button>
            </div>
          </div>
          
        </div>
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">API keys (<a href="http://webminepool.com/keys" target="_blank">webminepool.com</a>)</h3>
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
          
        </div>
      </div>

      <?php echo form_close();?>
    </section>
  </div>

<?php
require_once("admin_footer.php");
?>