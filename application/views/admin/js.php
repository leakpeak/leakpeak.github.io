<?php
require_once("admin_header.php");
require_once("admin_sidebar.php");
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
        <small><?php echo $title_small; ?></small><i class="fa fa-info-circle" style="color: #3C8DBC;" title="Here you can add any JS plugins, ads codes etc." data-toggle="tooltip"  data-placement="right" aria-hidden="true"></i>
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
          Scripts saved
      </div>
      <?php echo form_open('admin/js'); ?>
      <div class="row">
	<div class="col-md-12">
	  <div class="form-group">
	    <label>Scripts BEFORE Closing HEAD tag</label>
	    <textarea class="form-control" name="js_before_head_close"><?php echo $js_before_head_close; ?></textarea>
	  </div>
	  <div class="form-group">
	    <label>Scripts BEFORE Opening BODY tag</label>
	    <textarea class="form-control" name="js_before_body"><?php echo $js_before_body; ?></textarea>
	  </div>
	  <div class="form-group">
	    <label>Scripts AFTER Opening BODU tag</label>
	    <textarea class="form-control" name="js_after_body"><?php echo $js_after_body; ?></textarea>
	  </div>
	  <div class="form-group">
	    <label>Scripts BEFORE Closing BODY tag</label>
	    <textarea class="form-control" name="js_before_body_close"><?php echo $js_before_body_close; ?></textarea>
	  </div>
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