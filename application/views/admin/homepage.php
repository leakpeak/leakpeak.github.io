<?php
require_once("admin_header.php");
require_once("admin_sidebar.php");
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
        <small><?php echo $title_small; ?></small><i class="fa fa-info-circle" style="color: #3C8DBC;" title="Here you can edit you homepage and footer layout. Please be careful, especially with <div> tags. Backup this data is recommended before editing." data-toggle="tooltip"  data-placement="right" aria-hidden="true"></i>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Admin panel</a></li>
        <li class="active"><?php echo $title; ?></li>
      </ol>
    </section>
    <section class="content settings">
      <div class="alert alert-success alert-dismissible"  <?php  echo !isset($success) ? "style='display: none; color: green;'"  : "style='display: block; color: green;'";  ?>>
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          <h4><i class="icon fa fa-check"></i> Success.</h4>
          Homepage layout was successfully saved!
        </div>
      <?php echo form_open('admin/homepage'); ?>
      <div class="row">
	<div class="col-md-2 hidden-xs">
	  <div class="form-group">
	    <label>Left sidebar</label>
	    <textarea class="form-control" style="height: 595px;" name="left_sidebar"><?php echo $left_sidebar; ?></textarea>
	  </div>
	</div>
	<div class="col-md-8 hidden-xs">
	  <div class="form-group">
	    <label>Top banner</label>
	    <textarea class="form-control" name="top_banner"><?php echo $top_banner; ?></textarea>
	  </div>
	  <div class="row">
	    <div class="col-md-12">
	      <div class="form-group">
		<label>Wellcome text (unlogged)</label>
		<textarea style="height: 55px;" class="form-control" name="wellcome_text_unlogged"><?php echo $wellcome_text_unlogged; ?></textarea>
	      </div>
	    </div>
	  </div>
	  <div class="row">
	    <div class="col-md-12">
	      <div class="form-group">
		<label>Wellcome text (logged)</label>
		<textarea style="height: 55px;" class="form-control" name="wellcome_text_logged"><?php echo $wellcome_text_logged; ?></textarea>
	      </div>
	    </div>
	  </div>
	  <div style="height: 150px; background: #000;">
	    <p style="padding:  30px 0 0 0; color: #fff; text-align: center; font-size:34px;">Faucet functions here</p>
	    <p style="color: #fff; text-align: center;">If you really want to place something here, go to /views/home_logged.php and /views/home_unlogged.php files.</p>
	  </div>
	  <div class="row">
	    <div class="col-md-12">
	      <div class="form-group">
		<label>Mining text (visible if mining is enabled)</label>
		<textarea style="height: 55px;" class="form-control" name="mining_text"><?php echo $mining_text; ?></textarea>
	      </div>
	    </div>
	  </div>
	  <div class="row">
	    <div class="col-md-6">
	      <div class="form-group">
		<label>Referal text (unlogged)</label>
		<textarea style="height: 55px;" class="form-control" name="ref_text_unlogged"><?php echo $ref_text_unlogged; ?></textarea>
	      </div>
	    </div>
	    <div class="col-md-6">
	      <div class="form-group">
		<label>Referal text (logged)</label>
		<textarea style="height: 55px;" class="form-control" name="ref_text_logged"><?php echo $ref_text_logged; ?></textarea>
	      </div>
	    </div>
	  </div>
	  <div class="form-group">
	    <label>Main area</label>
	    <textarea style="height: 255px;" class="form-control" name="homepage_main"><?php echo $homepage_main; ?></textarea>
	  </div>
	</div>
	<div class="col-md-2 hidden-xs">
	  <div class="form-group">
	    <label>Right sidebar</label>
	    <textarea class="form-control" name="right_sidebar" style="height: 595px;"><?php echo $right_sidebar; ?></textarea>
	  </div>
	</div>
      </div>
      <div class="row">
	<div class="col-md-4">
	  <label>Footer area 1</label>
	    <textarea class="form-control" name="footer_place_1"><?php echo $footer_place_1; ?></textarea>
	</div>
	<div class="col-md-4">
	  <label>Footer area 1</label>
	    <textarea class="form-control" name="footer_place_2"><?php echo $footer_place_2; ?></textarea>
	</div>
	<div class="col-md-4">
	  <label>Footer area 1</label>
	    <textarea class="form-control" name="footer_place_3"><?php echo $footer_place_3; ?></textarea>
	</div>
      </div>
      <br>
      <button class="btn btn-success">Save</button>
      <?php echo form_close();?>
    </section>
  </div>
<?php
require_once("admin_footer.php");
?>