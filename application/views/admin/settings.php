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
          Faucet options was successfully saved.
        </div>
      <?php echo form_open('admin/settings'); ?>
      <div class="row">
        <div class="col-md-6">
          <?php require_once('settings_general.php');?>
          <?php require_once('settings_other.php');?>
          <button class="btn btn-success">Save</button>
        </div>
        <div class="col-md-6">
          <?php require_once('settings_captcha.php');?>
          <?php require_once('settings_payment.php');?>
        </div>
      </div>

      <?php echo form_close();?>
    </section>
  </div>

<?php
require_once("admin_footer.php");
?>