<?php
require_once("admin_header.php");
require_once("admin_sidebar.php");
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Edit: <?php echo $title; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'/admin/'; ?>"><i class="fa fa-dashboard"></i> Admin panel</a></li>
        <li><a href="<?php echo base_url().'admin/users/'; ?>"> users</a></li>
        <li class="active"><?php echo $title; ?></li>
      </ol>
    </section>
    <section class="content settings">
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-error alert-dismissible"  <?php if (validation_errors()==''){echo "style='display: none'";} ?>>
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          <h4><i class="icon fa fa-check"></i> Error.</h4>
          <?php echo validation_errors(); ?>
        </div>
        <div class="alert alert-success alert-dismissible"  <?php  echo !isset($success) ? "style='display: none; color: green;'"  : "style='display: block; color: green;'";  ?>>
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          <h4><i class="icon fa fa-check"></i> Success.</h4>
          Successed!
        </div>
      </div>
    </div>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Ban</h3>
        </div>
        <div class="box-body">
        <?php echo form_open('admin/ban'); ?>
           <div class="form-group">
             <label>IP address</label>
             <input type="text" class="form-control" name="ip" placeholder="e.g. 181.253.2.18">
               
           </div>
           <button class="btn btn-danger"><i class="fa fa-ban"></i> Ban it!</button>
          <?php echo form_close();?>
         </div>
      </div>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Whitelist</h3>
        </div>
        <div class="box-body">
          <?php echo form_open('admin/whitelist'); ?>
           <div class="form-group">
             <label>IP address</label>
             <input type="text" class="form-control" name="ip" placeholder="e.g. 181.253.2.18">
           </div>
           <button class="btn btn-success"><i class="fa fa-check-square-o"></i> Add to whitelist</button>
          <?php echo form_close();?>
        </div>
      </div>
    </section>
  </div>
<script>
  // Replace the <textarea id="editor1"> with a CKEditor
  // instance, using default configuration.
  CKEDITOR.replace( 'content' );
</script>
<?php
require_once("admin_footer.php");
?>